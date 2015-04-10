<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Donation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donation-form">
<br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'amount')->textInput() ?>

 <!--?= $form->field($model, 'card_num')->textInput(['maxlength' => 45]) ?-->

 <!--   ?= $form->field($model, 'expiry_date')->textInput() ?-->

  <!--  <?= $form->field($model, 'ccv')->textInput(['maxlength' => 45]) ?> -->

    <?= $form->field($model, 'first_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'last_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 45]) ?>

<!--    <?= $form->field($model, 'user_id')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
