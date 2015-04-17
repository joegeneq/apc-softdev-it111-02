<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Volunteer;
use frontend\models\VolunteerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VolunteerController implements the CRUD actions for Volunteer model.
 */
class VolunteerController extends Controller
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
     * Lists all Volunteer models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Displays a single Volunteer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
       return $this->redirect((array('site/index')));
    }

    /**
     * Creates a new Volunteer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Volunteer();

        // if(isset($_POST['Volunteer']))
        // {
        //     $model->attributes=$_POST['Volunteer'];
        //     if($model->save()) 
        //     {
        //         $model->sendEmail();
        //         $this->redirect((array('site/index')));
        //     }
        // }


        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            

            Yii::$app->getSession()->setFlash('success', 'Thank You For Volunteering!!!');
           return $this->redirect((array('site/index')));
       }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Volunteer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
         return $this->redirect((array('site/index')));
    }

    /**
     * Deletes an existing Volunteer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Finds the Volunteer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Volunteer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Volunteer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
