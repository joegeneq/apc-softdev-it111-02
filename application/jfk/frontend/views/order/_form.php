<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use backend\models\Category;
use backend\models\Products;
use backend\models\Productcolor;
use backend\models\Productsize;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">
<div class="row">
        
            <div class="col-lg-17">
    
                <div class="body-content">

                    <div class="row">
        
                        <div class="col-lg-4">
                
                            <h2>JFK Cap</h2>

                                 <?= Html::img('images/cap.jpg');?>
                
                         </div>
        
        
                        <div class="col-lg-4">
               
                            <h2>JFK Shirt</h2>
                
                                <?= Html::img('images/shirt.jpg');?><p>
                
                        </div>

                        <div class="col-lg-4">
                            
                            <h2>JFK Mug</h2>

                                <?= Html::img('images/mug.jpg');?>
        
                        </div>
                    </div>

                </div>
            </div>
    </div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id','category'),
        [

            'prompt'=>'Select Category',
            'onchange'=>
                '$.post
                    ("index.php?r=products/ordercategory&id='.'"+$(this).val(), 
                        function( data ) 
                        {
                            $( "select#order-products_id").html( data );
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

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'totalPrice')->textInput(['readonly'=> true, 'value'=>0]) ?>

    <?php // $form->field($model, 'date_created')->textInput() ?>

    <div class="form-group"> 
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Order Now') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

$('#order-products_id').change(function(){

    var id = $(this).val();

       

    $.get('index.php?r=productdetails/get-product-details',{ id : id },function(data)
    {
        $(jQuery.parseJSON(data)).each(function()
        {

//      $("select#order-color_id").html( data );
        var size = this.productsize_id; 
        var color = this.productcolor_id;
        var cost = this.unitCost;

        var optionSize = $('<option>');
        optionSize.attr('value',size).text(size);
        $('#order-productsize_id').append(optionSize);

        var optionColor = $('<option/>');
        optionColor.attr('value',color).text(color);
        $('#order-productcolor_id').append(optionColor);



        $('#order-unitcost').attr('value',cost);
    });



    
});
    $('#order-productsize_id').empty();
    $('#order-productcolor_id').empty();
    $('#order-unitcost').empty();
});
$('#order-unitcost').empty();
$('#order-quantity').change(function(){

    var qty = $(this).val();
    var price = $('#order-unitcost').val();
    var total = qty * price;
    
    $('#order-totalprice').val(total);
})

JS;
$this->registerJs($script);
?>

