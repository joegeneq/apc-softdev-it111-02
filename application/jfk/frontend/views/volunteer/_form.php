<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Volunteer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="volunteer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'volunteer_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_number1')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'contact_number2')->textInput(['maxlength' => 11]) ?>

    <?php // $form->field($model, 'status')->dropDownList(['Pending'=>'Pending', Approved' => 'Approved', 'Rejected' => 'Rejected', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Volunteer!') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
