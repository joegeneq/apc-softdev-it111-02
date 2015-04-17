<?php

namespace backend\controllers;

use Yii;
use backend\models\Uploadpicture;
use backend\models\UploadpictureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Events;
use yii\web\UploadedFile;
/**
 * UploadpictureController implements the CRUD actions for Uploadpicture model.
 */
class UploadpictureController extends Controller
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
     * Lists all Uploadpicture models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UploadpictureSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Uploadpicture model.
     * @param integer $id
     * @param integer $events_eventID
     * @return mixed
     */
    public function actionView($id, $events_eventID)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $events_eventID),
        ]);
    }

    /**
     * Creates a new Uploadpicture model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Uploadpicture();

       // if ($model->load(Yii::$app->request->post()) && $model->save()) 
       //  {   

       //      // get instance of uploaded file
       //      $model->file = UploadedFile::getInstance($model,'file');
            
       //      if($model->file)
       //      {
       //          $imageID = $model->events_eventID;
       //          $model->file->saveAs( 'uploads/'.$imageID.'_'.$model->file->baseName.'.'.$model->file->extension);
       //          $model->picture = 'uploads/'.$imageID.'_'.$model->file->baseName.'.'.$model->file->extension;

       //      }else 
       //          {
       //          // upload is null
       //          $model->save();
       //          return $this->redirect(['index']);
       //          }

       //      $model->save();
       //      return $this->redirect(['index']);

       //  }else {
       //      return $this->render('create', ['model' => $model,]);
       //  }
    }

    /**
     * Updates an existing Uploadpicture model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $events_eventID
     * @return mixed
     */
    public function actionUpdate($id, $events_eventID)
    {
        $model = $this->findModel($id, $events_eventID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'events_eventID' => $model->events_eventID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Uploadpicture model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $events_eventID
     * @return mixed
     */
    public function actionDelete($id, $events_eventID)
    {
        $this->findModel($id, $events_eventID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Uploadpicture model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $events_eventID
     * @return Uploadpicture the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $events_eventID)
    {
        if (($model = Uploadpicture::findOne(['id' => $id, 'events_eventID' => $events_eventID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
