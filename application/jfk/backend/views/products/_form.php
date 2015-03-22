<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'purchase_details_id')->textInput() ?>

    <?= $form->field($model, 'purchase_details_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
