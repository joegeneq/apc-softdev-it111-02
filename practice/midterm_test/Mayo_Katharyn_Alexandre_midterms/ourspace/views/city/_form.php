<?php

use yii\helpers\Html;
use app\models\Province;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>
	

    <?= $form->field($model, 'city_code')->textInput(['maxlength' => 32]) ?>
	


    <?= $form->field($model, 'city_description')->textInput(['maxlength' => 32]) ?>
	
	 <?= $form->field($model, 'province_id')->dropDownList(
                ArrayHelper::map(Province::find()->all(), 'id','province_code'),
                ['prompt'=>'Select Province']
 
        ) ?>
 

	 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
