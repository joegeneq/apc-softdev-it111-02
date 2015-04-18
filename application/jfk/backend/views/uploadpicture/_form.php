<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use backend\models\Events;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Uploadpicture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadpicture-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'events_eventID')->dropDownList(ArrayHelper::map(Events::find()->all(), 'eventID','EventName'),
        [ 'prompt'=>'Select Event', ])->label('Event') ?>

    <?= $form->field($model, 'file')->fileInput(['multiple'=>true]) ?>

	<?php
    echo FileInput::widget([
        'name' => 'uploadedFile[]',
        'options'=>[
            'multiple'=>true
        ],
        'pluginOptions' => [
            'uploadUrl' => Url::to(['/site/file-upload']),
            'uploadExtraData' => [
                'album_id' => 20,
                'cat_id' => 'Nature'
            ],
            'maxFileCount' => 10
        ]
    ])
    ;?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
