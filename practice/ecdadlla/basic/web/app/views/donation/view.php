<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Donation */

$this->title = $model->donation_no;
$this->params['breadcrumbs'][] = ['label' => 'Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->donation_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->donation_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'donation_no',
            'donate_amount',
        ],
    ]) ?>

</div>
