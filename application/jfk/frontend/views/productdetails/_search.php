<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProductdetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productdetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'products_id') ?>

    <?= $form->field($model, 'productsize_id') ?>

    <?= $form->field($model, 'productcolor_id') ?>

    <?php // echo $form->field($model, 'unitCost') ?>

    <?php // echo $form->field($model, 'itemsOnHand') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
