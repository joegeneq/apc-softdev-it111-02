<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Events;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UploadpictureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Upload Picture');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadpicture-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Upload a picture'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // [
            //     'attribute'=>'events_eventID',
            //     'value' => 'events_eventName'
            // ],
            'events_eventID',
            'picture',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
