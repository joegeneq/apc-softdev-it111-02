<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Subsciber;
use frontend\models\SubsciberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubsciberController implements the CRUD actions for Subsciber model.
 */
class SubsciberController extends Controller
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
     * Lists all Subsciber models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Displays a single Subsciber model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Creates a new Subsciber model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Subsciber();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect((array('site/index')));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Subsciber model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Deletes an existing Subsciber model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        return $this->redirect((array('site/index')));
    }

    /**
     * Finds the Subsciber model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subsciber the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subsciber::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
