<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductdetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Productdetails');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productdetails-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Productdetails'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            
            [
                'attribute'=>'category_id',
                'value'=>'category.category'
            ],
            [
                'attribute'=>'products_id',
                'value'=>'products.productName'
            ],
            [
                 'attribute'=> 'productsize_id',
                'value'=>'productsize.size'
            ],
            [
                 'attribute'=> 'productcolor_id',
                'value'=>'productcolor.color'
            ],
            
            'unitCost',
            'itemsOnHand',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
