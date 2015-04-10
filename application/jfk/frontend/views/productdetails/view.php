<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productdetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productdetails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productdetails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id, 'category_id' => $model->category_id, 'products_id' => $model->products_id, 'productsize_id' => $model->productsize_id, 'productcolor_id' => $model->productcolor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id, 'category_id' => $model->category_id, 'products_id' => $model->products_id, 'productsize_id' => $model->productsize_id, 'productcolor_id' => $model->productcolor_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'products_id',
            'productsize_id',
            'productcolor_id',
            'unitCost',
            'itemsOnHand',
        ],
    ]) ?>

</div>
