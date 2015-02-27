<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'donationNumber') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'cardNumber') ?>

    <?= $form->field($model, 'paymentType') ?>

    <?php // echo $form->field($model, 'expirationDate') ?>

    <?php // echo $form->field($model, 'ccv') ?>

    <?php // echo $form->field($model, 'firstName') ?>

    <?php // echo $form->field($model, 'middleName') ?>

    <?php // echo $form->field($model, 'lastName') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phoneType') ?>

    <?php // echo $form->field($model, 'phoneNumber') ?>

    <?php // echo $form->field($model, 'Users_cus_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
