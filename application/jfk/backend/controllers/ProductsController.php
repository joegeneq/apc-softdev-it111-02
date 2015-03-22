<?php

namespace backend\controllers;

use Yii;
use backend\models\Products;
use backend\models\ProductsSearch;
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
     * @param integer $purchase_details_id
     * @param integer $purchase_details_user_id
     * @return mixed
     */
    public function actionView($id, $purchase_details_id, $purchase_details_user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $purchase_details_id, $purchase_details_user_id),
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
            return $this->redirect(['view', 'id' => $model->id, 'purchase_details_id' => $model->purchase_details_id, 'purchase_details_user_id' => $model->purchase_details_user_id]);
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
     * @param integer $purchase_details_id
     * @param integer $purchase_details_user_id
     * @return mixed
     */
    public function actionUpdate($id, $purchase_details_id, $purchase_details_user_id)
    {
        $model = $this->findModel($id, $purchase_details_id, $purchase_details_user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'purchase_details_id' => $model->purchase_details_id, 'purchase_details_user_id' => $model->purchase_details_user_id]);
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
     * @param integer $purchase_details_id
     * @param integer $purchase_details_user_id
     * @return mixed
     */
    public function actionDelete($id, $purchase_details_id, $purchase_details_user_id)
    {
        $this->findModel($id, $purchase_details_id, $purchase_details_user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $purchase_details_id
     * @param integer $purchase_details_user_id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $purchase_details_id, $purchase_details_user_id)
    {
        if (($model = Products::findOne(['id' => $id, 'purchase_details_id' => $purchase_details_id, 'purchase_details_user_id' => $purchase_details_user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
