<?php

namespace backend\controllers;

use Yii;
use backend\models\Events;
use backend\models\EventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * EventsController implements the CRUD actions for Events model.
 */
class EventsController extends Controller
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
     * Lists all Events models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Events model.
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
     * Creates a new Events model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Events();

        if($_POST){

            $file = UploadedFile::getInstances($model, 'file');
            var_dump($file);

        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()){

        //      $imageName = $model->eventName;
        //      $model->file = UploadedFile::getInstance($model,'file');
        //      $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );

        //      $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

        //      return $this->redirect(['index']);

        // } else {
        //     return $this->render('create', [
        //         'model' => $model,
        //     ]);
        // }

        if ($model->load(Yii::$app->request->post())) 
        {

                // get instance of uploaded file
            

            $model->file = UploadedFile::getInstance($model,'file');
            
            if($model->file)
            {
                $imageName = $model->eventName;
                $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );
                $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

            }else {

                $model->save();
                return $this->redirect(['index']);

            }
            // $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );


            // $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

            $model->save();
            return $this->redirect(['index']);


            // $model->save();
            // return $this->redirect(['index']);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Events model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        // if ($model->load(Yii::$app->request->post()) && $model->save()){

        //      $imageName = $model->eventName;
        //      $model->file = UploadedFile::getInstance($model,'file');
        //      $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );

        //      $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

        //      return $this->redirect(['index']);

        // } else {
        //     return $this->render('create', [
        //         'model' => $model,
        //     ]);
        // }

        if ($model->load(Yii::$app->request->post())) 
        {

                // get instance of uploaded file
        //    $imageName = $model->eventName;

            $model->file = UploadedFile::getInstance($model,'file');
            
            if($model->file)
            {
                $imageName = $model->eventName;
                $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );
                $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

            }else {

                $model->save();
                return $this->redirect(['index']);

            }
            // $model->file->saveAs( 'gallery/'.$imageName.'.'.$model->file->extension );


            // $model->eventPictures = 'gallery/'.$imageName.'.'.$model->file->extension;

            $model->save();
            return $this->redirect(['index']);


            // $model->save();
            // return $this->redirect(['index']);

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Events model.
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
     * Finds the Events model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Events the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Events::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
