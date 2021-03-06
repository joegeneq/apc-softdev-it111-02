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
    // public function actionCreate()
    // {
    //    $model = new Volunteer();

    //    // if(isset($_POST['Volunteer']))
    //     // {
    //     //     $model->attributes=$_POST['Volunteer'];
    //     //     if($model->save()) 
    //     //     {
    //     //         $model->sendEmail();
    //     //         $this->redirect((array('site/index')));
    //     //     }
    //     // }


    //    if ($model->load(Yii::$app->request->post()))
    //     {   
    //         // if ($volunteer = $model->volunteerform()) 
    //         if($model->save())
    //         {
             
    //             $email = Yii::$app->mailer->compose()
    //             ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
    //             ->setTo($model->volunteer_email)
    //             ->setSubject( 'Joy For Kids Screening' )
    //             ->setHtmlBody("Hello<br><p>This is a test for new volunteers</p>hahahahaha") 
    //             ->send();           
                
    //             if($email)
    //                 {
    //                     Yii::$app->getSession()->setFlash('success', 'Kindly check your email for further instructions.');
    //                 }else {
    //                     Yii::$app->session->setFlash('warning', 'There was an error sending email.');
    //                 }

    //         return $this->goHome();
                
    //             return $this->goHome();
    //         }
    //     }   
    //             return $this->render('create', ['model' => $model,]);
    // }

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
//            $this->printa(Yii::$app->request->post());exit;
            //TODO automatic email
            $postedData = Yii::$app->request->post();

            $body = "";
//            JFK Foundation has received your volunteer request. Kindly go to our main office at UG-12 Cityland Pioneer Condominium, 128 Pioneer Street, Mandaluyong for a screening test
            $body .= "<h1>JFK Foundation has received your volunteer request.</h1>";
            $body .= "<span>Dear ".$postedData['Volunteer']['first_name']." ".$postedData['Volunteer']['last_name'].",</span>";
            $body .= "<p>Kindly go to our main office at UG-12 Cityland Pioneer Condominium, 128 Pioneer Street, Mandaluyong for a screening test</p>";
            Yii::$app->mailer->compose()
                ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
//                ->setBcc(ArrayHelper::map(Subsciber::find()->all(), 'subscriber_email', 'subscriber_email'))
                ->setBcc($postedData['Volunteer']['volunteer_email'])
                ->setSubject("Joy for kids screening")
                ->setHtmlBody($body)
                ->send();

            Yii::$app->getSession()->setFlash('success', 'Thank You For Volunteering!!!');
           return $this->redirect((array('site/index')));
       }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
        //     }

        //     }




        // }else {
        //             return $this->render('create', ['model' => $model,]);
        //         }   
       

                                // Yii::$app->mailer->compose()
                                // ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
                                // ->setTo($model->volunteer_email)
                                // ->setSubject( 'Joy For Kids Screening' )
                                // ->setHtmlBody("<br><p>This is a test for new volunteers</p>hahahahaha")
                                // ->send();

                                // Yii::$app->getSession()->setFlash('success', 'Thank You For Volunteering!!!');

                                // $this->refresh();

                                // return $this->redirect((array('site/index')));

                            // }else {
                            //     // null
                            // }
                
                               
    //}    
        // if(isset($_POST['Volunteer']))
        // {
        //     $model->attributes=$_POST['Volunteer'];
        //     if($model->save()) 
        //     {
        //         $model->sendEmail();
        //         $this->redirect((array('site/index')));
        //     }
        // }


        // if ($model->load(Yii::$app->request->post()))
        // {
        //         Yii::$app->mailer->compose()
        //             ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
        //             ->setTo($model->volunteer_email)
        //             ->setSubject( 'Joy For Kids Screening' )
        //             ->setHtmlBody("<br><p>This is a test for new volunteers</p>hahahahaha")
        //             ->send();
            
        //     Yii::$app->getSession()->setFlash('success', 'Thank You For Volunteering!!!');
        //     return $this->redirect((array('site/index')));
            
        

        // if($model->save())
        // {       
        //     Yii::$app->mailer->compose()
        //             ->setFrom([\Yii::$app->params['supportEmail'] => 'Joy For Kids Foundation'])
        //             ->setTo($model->volunteer_email)
        //             ->setSubject( 'Joy For Kids Screening' )
        //             ->setHtmlBody("<br><p>This is a test for new volunteers</p>hahahahaha")
        //             ->send();
            
        //     Yii::$app->getSession()->setFlash('success', 'Thank You For Volunteering!!!');
        //     return $this->redirect((array('site/index')));
        // }
            
    //    else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

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
