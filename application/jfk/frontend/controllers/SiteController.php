<?php
namespace frontend\controllers;

use backend\models\Uploadpicture;
use frontend\models\Events;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionDonate()
    {
        return $this->render('donate');
    }

//	    public function actionPrograms()
    //   {
    //       return $this->render('programs');
//    }

    public function actionShop()
    {
        return $this->render('shop');
    }

    public function actionVolunteer()
    {
        return $this->render('volunteer');
    }

    public function actionGallery2013()
    {
        return $this->render('gallery2013');
    }

    public function actionGallery2014()
    {
        return $this->render('gallery2014');
    }

    public function actionDonations()
    {
        return $this->render('donations');
    }

    public function actionSubsciber()
    {
        return $this->render('subsciber');
    }

    public function actionEvents()
    {
        return $this->render('events');
    }

    public function actionGallery()
    {
<<<<<<< HEAD
        $eventArray = [];
        if(isset($_GET['year'])){
            $month = "01";
            if(isset($_GET['month'])){
                $month = $_GET['month'];
            }
            $date = $_GET['year']."-".$month."-01";
            $date2 = $_GET['year']."-".$month."-31";
            $events = Events::find()
                ->where(['>=', 'eventDate', $date])
                ->andWhere(['<=', 'eventDate', $date2])
                ->all();
        }else{
            $events = Events::find()->all();
        }
        foreach($events as $key => $event){
=======

        $events = Events::find()->all();
        foreach($events as $key => $event){

            $eventArray[$key]['event'] = $event->attributes;
            $images = Uploadpicture::findAll([
                'events_eventID' => $event->eventID,
            ]);
            if($images){
                foreach($images as $key2 => $image){
                    $eventArray[$key]['images'][$key2] = $image->attributes;
                }
            }

        }
//        $this->printa($eventArray);exit;
        return $this->render('gallery', [
            "events" => $eventArray
        ]);

    }

    public function actionSample()
    {
>>>>>>> 554c3ad8c03e0186ee0adbb69468a110088bab0e

            $eventArray[$key]['event'] = $event->attributes;
            $images = Uploadpicture::findAll([
                'events_eventID' => $event->eventID,
            ]);
            if($images){
                foreach($images as $key2 => $image){
                    $eventArray[$key]['images'][$key2] = $image->attributes;
                }
            }

        }
//        $this->printa($eventArray);exit;
        return $this->render('gallery', [
            "events" => $eventArray,
            "eventsDate" => Events::find()->all()
        ]);

<<<<<<< HEAD
    }

    public function actionSample()
    {


        $img = Url::to('@web/images/Events/jfk2014/') . $img_obj['AVATAR'];
        $image = '<img src="' . $img . '" width="600" />';

=======
        $img = Url::to('@web/images/Events/jfk2014/') . $img_obj['AVATAR'];
        $image = '<img src="' . $img . '" width="600" />';

>>>>>>> 554c3ad8c03e0186ee0adbb69468a110088bab0e
        return $this->render('sample');
    }


    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
