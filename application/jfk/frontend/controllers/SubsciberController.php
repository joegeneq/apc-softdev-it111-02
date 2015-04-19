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

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
//            $this->printa(Yii::$app->request->post());exit;
            //TODO automatic email
            $postedData = Yii::$app->request->post();

            $body = "";
//            JFK Foundation has received your volunteer request. Kindly go to our main office at UG-12 Cityland Pioneer Condominium, 128 Pioneer Street, Mandaluyong for a screening test
            $body .= "<h1>You are now subscribed to Joy For Kids Foundation.</h1>";
            $body .= "<span>Dear ".$postedData['Subsciber']['first_name']." ".$postedData['Subsciber']['last_name'].",</span>";
            $body .= "<p>Thank you for subscribing. Stay for further Updates and Events from JFK (Joy for Kids).</p>";
            $body .= "<p>If you want to join the Events, you can volunteer in our site.</p>";
            $body .= "<p><br><br>Thank you and God Bless,</p>";
            $body .= "<p><br>JFK (Joy for Kids) Foundation.</p>";

            Yii::$app->mailer->compose()
                ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
//                ->setBcc(ArrayHelper::map(Subsciber::find()->all(), 'subscriber_email', 'subscriber_email'))
                ->setBcc($postedData['Subsciber']['subscriber_email'])
                ->setSubject("Joy For Kids Subscription")
                ->setHtmlBody($body)
                ->send();

            Yii::$app->getSession()->setFlash('success', 'Thank You For Subscribing!!!');
           return $this->redirect((array('site/index')));
       }else {
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
