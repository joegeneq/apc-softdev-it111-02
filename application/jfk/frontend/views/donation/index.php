<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DonationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donations';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Donation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'amount',
            'card_num',
            'expiry_date',
            'ccv',
			'first_name',
			'last_name',
			'email',
			'phone_number',
            // 'first_name:ntext',
            // 'middle_name:ntext',
            // 'last_name:ntext',
            // 'email:email',
            // 'phone_number',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
