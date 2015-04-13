<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Events */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Events',
]) . ' ' . $model->eventID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Events'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eventID, 'url' => ['view', 'id' => $model->eventID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="events-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
