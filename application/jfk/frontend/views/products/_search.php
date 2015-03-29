<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'item_type') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'purchase_details_id') ?>

    <?php // echo $form->field($model, 'purchase_details_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
