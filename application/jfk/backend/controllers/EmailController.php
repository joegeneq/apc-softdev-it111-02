<?php

namespace backend\controllers;

use Yii;
use backend\models\Email;
use backend\models\EmailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Subsciber;
use yii\helpers\ArrayHelper;
/**
 * EmailController implements the CRUD actions for Email model.
 */
class EmailController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Email models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Email model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Email model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Email();

        if ($model->load(Yii::$app->request->post()))
        {

            $model->attachment = UploadedFile::getInstance($model, 'attachment');

            if ($model->attachment)
            {
                    $time = time();
                    $model->attachment->saveAs('attachments/' .$time. '.' . $model->attachment->extension);
                    $model->attachment='attachments/' .$time. '.' .$model->attachment->extension;

            }

             if($model->attachment)
            {

                    Yii::$app->mailer->compose()
                    ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
                    ->setBcc(ArrayHelper::map(Subsciber::find()->select(['first_name','last_name','subscriber_email'])->all(), 'subscriber_email', 'subscriber_email'))
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->attach($model->attachment)
                    ->send();
            }else {
   
                    Yii::$app->mailer->compose()
                    ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
                    ->setBcc(ArrayHelper::map(Subsciber::find()->all(), 'subscriber_email', 'subscriber_email'))
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->send();

                    
            }

                
          $model->save();
          
                 Yii::$app->getSession()->setFlash('success', 'Thank You For Subscribing To JFK.');
                 return $this->redirect(['index']);    
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    }

    /**
     * Updates an existing Email model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Email model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Email model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Email the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Email::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
