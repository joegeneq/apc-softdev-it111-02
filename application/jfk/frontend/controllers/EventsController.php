<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Events;
use frontend\models\EventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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

        return $this->render('index');

    

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

    // public function getEvents(){

         
    // }
}
// echo "<option>Select Product</option>";
//                 foreach($products as $prod){
//                     echo "<option value='".$prod->id."'>".$prod->productName."</option>";

//if($countQuery > 0){

//                     echo "<option value=0>Select Color</option>";
//                 foreach($query as $que){
//                     echo "<option value='".$que->id."'>".$que->color."</option>";
//                 }
//             }
//             else{
//                 echo "<option value=0>Select Color</option>";
//                 echo "<option value=0> No Color Available </option>";
//             } 