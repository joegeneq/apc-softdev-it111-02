<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use backend\models\Events;

/* @var $this yii\web\View */
/* @var $model backend\models\Uploadpicture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadpicture-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'events_eventID')->dropDownList(ArrayHelper::map(Events::find()->all(), 'eventID','EventName'),
        [

            'prompt'=>'Select Event',
            /*'onchange'=>
                '$.post
                    ("index.php?r=products/category&id='.'"+$(this).val(), 
                        function( data ) 
                        {
                            $( "select#order-products_id").html( data );
                        }
                    )'*/
        ])->label('Event') ?>

    <?= $form->field($model, 'file[]')->widget(FileInput::classname(), ['options'=>['multiple' => true]]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
