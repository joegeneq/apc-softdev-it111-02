<?php

use yii\helpers\Html;
use backend\models\Events;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Events');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

   
    

    <?= 
        "<br><br><p><b> JOY FOR KIDS MEANINGFUL INVOLVEMENTS</b></p><br>";

        $countEvents = Events::find()
         ->select(['eventName','eventDesc','eventLocation','eventDate'])
         ->count();

         $events = Events::find()
         ->select(['eventName','eventDesc','eventLocation','eventDate'])
         ->all();

         if($events > 0){

                echo "<table border=1 width=100%>";
            foreach($events as $event)
            {
                
                echo "<table border=1 width=100%>


                <tr>
                <th width=30%><br>Event Name<br></th>
                <td><br>".$event->eventName."<br></td>
                </tr>

                <tr>
                <th>Event Description</td>
                <td><br>".$event->eventDesc."<br><br></td>
                </tr>

                <tr>
                <th>Event Location</th>
                <td><br>".$event->eventLocation."<br><br></td>
                </tr>

                <tr>
                <th>Event Date</th>
                <td><br>".$event->eventDate."<br><br><br></td>
                </tr></table>

                <tr>
                <th><br><br></th>
                <td><br><br></td>
                </tr>";

                
               
                // echo "<tr><td>".$event->eventDesc."</td></tr>";
                // echo "<tr><td>".$event->eventLocation."</td></tr>";
                // echo "<tr><td>".$event->eventDate."</td></tr>";
            }

                 
         }else{
                throw new NotFoundHttpException('The requested page does not exist.');

         }


?>

</div>  
