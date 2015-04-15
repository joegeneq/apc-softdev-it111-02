<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Volunteers');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-index">
<br><br><br>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><br>
        <?php //Html::a(Yii::t('app', 'Create Volunteer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model) {
            if($model->status == 'Rejected')
            {
                return['class'=>'danger'];
            }else if($model->status == 'Approved'){
                return['class'=>'success'];
            }else
                return['class'=>'info'];
            },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name:ntext',
            'last_name:ntext',
            'volunteer_email:email',
            'contact_number1',
            'contact_number2',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
