<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gallery',
]) . ' ' . $model->galleryID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->galleryID, 'url' => ['view', 'id' => $model->galleryID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gallery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
