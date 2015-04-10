<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Productdetails */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Productdetails',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productdetails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'category_id' => $model->category_id, 'products_id' => $model->products_id, 'productsize_id' => $model->productsize_id, 'productcolor_id' => $model->productcolor_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="productdetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
