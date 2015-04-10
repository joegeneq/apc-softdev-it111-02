<?php

namespace backend\controllers;

use Yii;
use backend\models\Productdetails;
use backend\models\ProductdetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\filters\AccessControl;
/**
 * ProductdetailsController implements the CRUD actions for Productdetails model.
 */
class ProductdetailsController extends Controller
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
     * Lists all Productdetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductdetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Productdetails model.
     * @param integer $id
     * @param integer $category_id
     * @param integer $products_id
     * @param integer $productsize_id
     * @param integer $productcolor_id
     * @return mixed
     */
    public function actionView($id, $category_id, $products_id, $productsize_id, $productcolor_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $category_id, $products_id, $productsize_id, $productcolor_id),
        ]);
    }

    /**
     * Creates a new Productdetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Productdetails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id, 'products_id' => $model->products_id, 'productsize_id' => $model->productsize_id, 'productcolor_id' => $model->productcolor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Productdetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $category_id
     * @param integer $products_id
     * @param integer $productsize_id
     * @param integer $productcolor_id
     * @return mixed
     */
    public function actionUpdate($id, $category_id, $products_id, $productsize_id, $productcolor_id)
    {
        $model = $this->findModel($id, $category_id, $products_id, $productsize_id, $productcolor_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id, 'products_id' => $model->products_id, 'productsize_id' => $model->productsize_id, 'productcolor_id' => $model->productcolor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Productdetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $category_id
     * @param integer $products_id
     * @param integer $productsize_id
     * @param integer $productcolor_id
     * @return mixed
     */
    public function actionDelete($id, $category_id, $products_id, $productsize_id, $productcolor_id)
    {
        $this->findModel($id, $category_id, $products_id, $productsize_id, $productcolor_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Productdetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $category_id
     * @param integer $products_id
     * @param integer $productsize_id
     * @param integer $productcolor_id
     * @return Productdetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $category_id, $products_id, $productsize_id, $productcolor_id)
    {
        if (($model = Productdetails::findOne(['id' => $id, 'category_id' => $category_id, 'products_id' => $products_id, 'productsize_id' => $productsize_id, 'productcolor_id' => $productcolor_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionGetProductDetails($id) {

         $details = Productdetails::find()
         ->select(['pd.products_id','pd.productsize_id','pd.productcolor_id','pc.color','ps.size','unitCost'])
         ->from('productdetails as pd')
         ->leftJoin('productcolor as pc','pd.productcolor_id = pc.id')
         ->leftJoin('productsize as ps','pd.productcolor_id = ps.id')
         ->where(['products_id'=>$id])
         ->groupBy('pc.color','ps.size')
         ->all();

         echo Json::encode($details);

    }
}
