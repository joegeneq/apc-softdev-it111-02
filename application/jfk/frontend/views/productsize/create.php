<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Productsize */

$this->title = Yii::t('app', 'Create Productsize');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productsizes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productsize-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
