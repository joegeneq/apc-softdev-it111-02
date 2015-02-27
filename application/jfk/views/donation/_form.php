<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Donation;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Donation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'donationNumber')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'cardNumber')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'paymentType')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'expirationDate')->textInput() ?>

    <?= $form->field($model, 'ccv')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'firstName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'middleName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'phoneType')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Users_cus_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
