<?php

use yii\helpers\Html;
use backend\models\Events;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Events'); 
?>
<div class="events-index">
    <?= 
        "<br><br><p class=events-title><b> JOY FOR KIDS MEANINGFUL INVOLVEMENTS</b></p><br>";

        $countEvents = Events::find()
         ->select(['eventName','eventDesc','eventLocation','eventDate'])
         ->count();

         $events = Events::find()
         ->select(['eventName','eventDesc','eventLocation','eventDate'])
         ->all();

         if($events > 0){

                echo "<table>";
            foreach(array_reverse($events) as $event)
            {
                
                echo "<table>


                <tr>
                <th>Event Name</th>
                <td><br><b><u>".$event->eventName."</b></u><br><br></td>
                </tr>

                <tr>
                <th>Event Description</td>
                <td><br>".$event->eventDesc."<br></td>
                </tr>

                <tr>
                <th>Event Location</th>
                <td><br>".$event->eventLocation."<br><br></td>
                </tr>

                <tr>
                <th>Event Date</th>
                <td><br>".$event->eventDate."<br><br></td>
                </tr></table>

                <tr>
                <th><br><br></th>
                <td><br><br></td>
                </tr>";

                
            }

                 
         }else{
                throw new NotFoundHttpException('The requested page does not exist.');

         }


?>

</div>  
<!-- <p class=button-gallery><a class=btn btn-warning href=http://localhost/joy4kids/frontend/web/index.php?r=gallery%2Findex>See Gallery &raquo;</a></p> -->