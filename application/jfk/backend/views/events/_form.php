<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eventName')->textInput(['maxlength' => 255/*, 'placeholder'=>'Event Name'*/]) ?>

    <?= $form->field($model, 'eventDesc')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'eventLocation')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'eventDate')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Event Date ...'],
    'pluginOptions' => [
        'autoclose'=>true
    ]
]);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
