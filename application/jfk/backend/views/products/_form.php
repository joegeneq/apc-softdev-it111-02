<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    

   <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id','category'),
        [

            'prompt'=>'Select Category',
            /*'onchange'=>
                '$.post
                    ("index.php?r=products/category&id='.'"+$(this).val(), 
                        function( data ) 
                        {
                            $( "select#order-products_id").html( data );
                        }
                    )'*/
        ])->label('Category') ?>

     <?= $form->field($model, 'productName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'unitCost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
