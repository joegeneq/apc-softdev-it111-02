<?php

namespace backend\controllers;

use Yii;
use backend\models\Volunteer;
use backend\models\VolunteerSearch;
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
        $searchModel = new VolunteerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Volunteer model.
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
     * Creates a new Volunteer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // $model = new Volunteer();

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['index']);
        // } else {
        //     return $this->render('create', [
        //         'model' => $model,
        //     ]);
        // }

        return $this->redirect((array('emailv/index')));
    }

    /**
     * Updates an existing Volunteer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $postedData = Yii::$app->request->post();
            if ($postedData['Volunteer']['status'] == "Approved") {
                $body = "";
                $body .= "<h1>JFK Foundation has approved your volunteer request.</h1>";
                $body .= "<span>Dear " . $postedData['Volunteer']['first_name'] . " " . $postedData['Volunteer']['last_name'] . 
",</span>";
                $body .= "<p>You application has been approved by the foundation! CONGRATULATIONS!! You will receive emails whenever there will be an event to be conducted.</p>";
                Yii::$app->mailer->compose()
                    ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
//                ->setBcc(ArrayHelper::map(Subsciber::find()->all(), 'subscriber_email', 'subscriber_email'))
                    ->setBcc($postedData['Volunteer']['volunteer_email'])
                    ->setSubject("Joy for kids screening")
                    ->setHtmlBody($body)
                    ->send();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Volunteer model.
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
