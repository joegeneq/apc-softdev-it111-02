<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Products;
use frontend\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionView($id, $category_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $category_id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionUpdate($id, $category_id)
    {
        $model = $this->findModel($id, $category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'category_id' => $model->category_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $category_id
     * @return mixed
     */
    public function actionDelete($id, $category_id)
    {
        $this->findModel($id, $category_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $category_id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $category_id)
    {
        if (($model = Products::findOne(['id' => $id, 'category_id' => $category_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionOrdercategory($id)
    {
        $countProducts = Products::find()
            ->where(['category_id'=>$id])
            ->count();

        $products = Products::find()
            ->where(['category_id'=>$id])
            ->all();

        if($countProducts > 0) {
                echo "<option>Select Product</option>";
                foreach($products as $prod){
                    echo "<option value='".$prod->id."'>".$prod->productName."</option>";
                }
        }else{
            echo "<option>Select Product</option>";
            echo "<option value=0> No Products Available </option>";
        } 


    }

    public function actionGetProductPrice($id) 
    {
        $price = Products::find()
         ->where(['id'=>$id])
         ->all();

         echo Json::encode($price);

    }
}
