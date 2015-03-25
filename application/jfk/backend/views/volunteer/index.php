<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Volunteers';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-index">

   <!-- <h1><questionMark= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="col-lg-11">
	</div>
	<div class="col-lg-1">
       <!-- <INSERT QUESTIONMARK= Html::a('Create Subsciber', ['create'], ['class' => 'btn btn-success']) ?>-->
	   <a class="btn btn-default" href="http://www.gmail.com">	<?= Html::img('images/gmailLogo.png');?></a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name:ntext',
            'last_name:ntext',
            'volunteer_email:email',
            'contact_number1',
            'contact_number2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
