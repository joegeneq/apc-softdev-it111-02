<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Subsciber;
use kartik\widgets\Select2;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'subsciber_id')->textInput(['maxlength' => 255]) ?>
     <?php// $form->field($model, 'subsciber_id')->widget(Select2::classname(), [
   // 'data'=>ArrayHelper::map(Subsciber::find()->asArray()->all(), 'subscriber_email', 'subscriber_email')
   // 'options' => ['multiple' => true]]);?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'attachment')->fileInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
