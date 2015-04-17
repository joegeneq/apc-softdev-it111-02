<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubscriberDetails */
/* @var $dataProvider yii\data\ActiveDataProvider */

 $this->title = 'Subscribers';
//$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<div class="subsciber-index">
<br><br>
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <!--<h1><INSERT QUESTIONMARK= Html::encode($this->title) ?></h1>-->
    <!--<INSERT QUESTIONMARKphp  echo $this->render('_search', ['model' => $searchModel]); ?>-->

    <p>
        <!--<QUESTIONMARK= Html::a('Create Email', ['create'], ['class' => 'btn btn-success']) ?>-->

        <a class="btn btn-warning" href="http://localhost/joy4kids/backend/web/index.php?r=email%2Fcreate">Create Email &raquo;</a>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            'last_name',
            'subscriber_email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
