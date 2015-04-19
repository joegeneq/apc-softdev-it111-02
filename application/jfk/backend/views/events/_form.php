<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use kartik\widgets\DatePicker;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">


   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'eventName')->textInput(['maxlength' => 255]) ?>
    
    <?= $form->field($model, 'eventDesc')->textarea(['rows' => 6/*, 'placeholder'=>'Event Name'*/]) ?>

    <?= $form->field($model, 'eventLocation')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'eventDate')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Event Date ...'],
            'pluginOptions' => ['autoclose'=>true, 'format' => 'yyyy-mm-dd',]]);?>

    <?php //$form->field($model, 'file')->widget(FileInput::classname(), [
    //'options'=>['accept'=>'image/*', 'multiple'=>true],
    //'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png']
//]]);
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
