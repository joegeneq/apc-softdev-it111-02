<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reg_id') ?>

    <?= $form->field($model, 'cus_name') ?>

    <?= $form->field($model, 'birthdate') ?>

    <?= $form->field($model, 'contactNumber') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'uname') ?>

    <?php // echo $form->field($model, 'pass') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
