<?php

namespace backend\controllers;

use Yii;
use backend\models\Email;
use backend\models\EmailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use backend\models\Subsciber;
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
     * @param integer $subsciber_id
     * @return mixed
     */
    public function actionView($id, $subsciber_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $subsciber_id),
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
            //              ->setTo(ArrayHelper::map(Personnel::find()->all(), 'email', 'email'))
         //       $emails = backend\models\Subscriber::find($id);
                // $emails->toArray();
                // $Subscriber = Subsciber::model()->findAll();
                // $arr = array();
                //     foreach($Subscriber as $S)
                // {
                //  $arr[$S->id] = $S->subsciber_email;
                // }
                   $value =Yii::$app->mailer->compose()
                    ->setFrom(['ecdadulla@student.apc.edu.ph' => 'Joy For Kids Foundation'])
                    ->setTo($model->subsciber_id)
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->attach($model->attachment)
                    ->send();                   
            }else {
   
                   $value= Yii::$app->mailer->compose()
                    ->setFrom(['ecdadulla@student.apc.edu.ph' => 'Joy For Kids Foundation'])
                    ->setTo($model->subsciber_id)
                    ->setSubject($model->subject)
                    ->setHtmlBody($model->content)
                    ->send();

                    
            }

                
                $model->save();
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
     * @param integer $subsciber_id
     * @return mixed
     */
    public function actionUpdate($id, $subsciber_id)
    {
        $model = $this->findModel($id, $subsciber_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'subsciber_id' => $model->subsciber_id]);
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
     * @param integer $subsciber_id
     * @return mixed
     */
    public function actionDelete($id, $subsciber_id)
    {
        $this->findModel($id, $subsciber_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Email model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $subsciber_id
     * @return Email the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $subsciber_id)
    {
        if (($model = Email::findOne(['id' => $id, 'subsciber_id' => $subsciber_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}
