<?php

namespace backend\controllers;

use Yii;
use backend\models\Color;
use backend\models\ColorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * ColorController implements the CRUD actions for Color model.
 */
class ColorController extends Controller
{
    public function behaviors()
    {
        return [
        'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index','_form','create','_search','update','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Color models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ColorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Color model.
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
     * Creates a new Color model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Color();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Color model.
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
     * Deletes an existing Color model.
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
     * Finds the Color model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Color the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Color::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

//         public function actionProducts($id)
//     {

//         $countQuery = Color::find()
//         ->select(
//             [
//                 'productcolor.products_id, productcolor.color_id, color.id, color.color'
//             ])  
//         ->from('color')
//         ->leftJoin('productcolor', 'color.id = productcolor.color_id')
//         ->where(['color.id'=> $id, 'color.id'=>'productcolor.color_id'])
//         ->count();

        
//         $query = Color::find()
//         ->select(
//             [
//                 'productcolor.products_id, productcolor.color_id, color.id, color.color'
//             ])  
//         ->from('color')
//         ->leftJoin('productcolor', 'color.id = productcolor.color_id')
//         ->where(['id'=> $id, 'color.id'=>'productcolor.color_id'])    
//         ->limit (5);

//   //      $command = $query->createCommand();   
        
// //        $countData = $command->count();
//  //       $result = $command->all();
       
//          if($countQuery > 0){

//                     echo "<option value=0>Select Color</option>";
//                 foreach($query as $que){
//                     echo "<option value='".$que->id."'>".$que->color."</option>";
//                 }
//             }
//             else{
//                 echo "<option value=0>Select Color</option>";
//                 echo "<option value=0> No Color Available </option>";
//             } 
        

//     }
}
