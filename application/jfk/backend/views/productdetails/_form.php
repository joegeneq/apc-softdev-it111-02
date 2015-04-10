<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;

use backend\models\Products;
use backend\models\Productcolor;
use backend\models\Productsize;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Productdetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productdetails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id','category'),
        [

            'prompt'=>'Select Category',
            'onchange'=>
                '$.post
                    ("index.php?r=products/category&id='.'"+$(this).val(), 
                        function( data ) 
                        {
                            $( "select#productdetails-products_id").html( data );
                        }
                    )'
        ])->label('Category') ?>

    <?= $form->field($model, 'products_id')->dropDownList(ArrayHelper::map(Products::find()->all(), 'id', 'productName'),
        [
            'prompt'=>'Select Product',
            /*'onchange'=>
                '$.post
                    ("index.php?r=products/products&id='.'"+$(this).val(), 
                        function( data ) 
                            {
                                 $("select#order-color_id").html( data );
                            }
                    )'  */        
        ])->label('Product'); 

        ?>

   <?= $form->field($model, 'productsize_id')->dropDownList(ArrayHelper::map(Productsize::find()->all(), 'id', 'size'),
        [
            'prompt'=>'Select Size',
            /*'onchange'=>
                '$.post
                    ("index.php?r=products/products&id='.'"+$(this).val(), 
                        function( data ) 
                            {
                                 $("select#order-color_id").html( data );
                            }
                    )'  */        
        ])->label('Size'); 

        ?>

    <?= $form->field($model, 'productcolor_id')->dropDownList(ArrayHelper::map(Productcolor::find()->all(), 'id', 'color'),
        [
            'prompt'=>'Select Color',
            /*'onchange'=>
                '$.post
                    ("index.php?r=products/products&id='.'"+$(this).val(), 
                        function( data ) 
                            {
                                 $("select#order-color_id").html( data );
                            }
                    )'  */        
        ])->label('Color'); 

        ?>


    <?= $form->field($model, 'unitCost')->textInput(['readonly'=> true]) ?>

    <?= $form->field($model, 'itemsOnHand')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

$('#productdetails-products_id').change(function(){
    
    var id = $(this).val();

    $.get('index.php?r=products/get-product-price',{ id : id },function(data)
    {
       $(jQuery.parseJSON(data)).each(function(){

         var cost = this.unitCost;

       $('#productdetails-unitcost').attr('value',cost);

       });

       
        

    }); 

});
JS;
$this->registerJs($script);
?>