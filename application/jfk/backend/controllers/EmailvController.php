<?php

namespace backend\controllers;

use Yii;
use backend\models\Emailv;
use backend\models\EmailvSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Volunteer;
use yii\helpers\ArrayHelper;
/**
 * EmailvController implements the CRUD actions for Emailv model.
 */
class EmailvController extends Controller
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
     * Lists all Emailv models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmailvSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Emailv model.
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
     * Creates a new Emailv model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Emailv();

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
                    ->setBcc(ArrayHelper::map(Volunteer::find()->select(['id','volunteer_email','status'])->where(['status'=>'Approved'])->all(), 'volunteer_email', 'volunteer_email'))
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->attach($model->attachment)
                    ->send();

                    $model->save();
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
                return $this->redirect(['index']);  
            }else {
   
                    Yii::$app->mailer->compose()
                    ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
                    ->setBcc(ArrayHelper::map(Volunteer::find()->select(['volunteer_email','status'])->where(['status'=>'Approved'])->all(), 'volunteer_email', 'volunteer_email'))
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->send();

                    
            }

                
                $model->save();
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
                return $this->redirect(['index']);    
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
    }
    }

    /**
     * Updates an existing Emailv model.
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
     * Deletes an existing Emailv model.
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
     * Finds the Emailv model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Emailv the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Emailv::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
