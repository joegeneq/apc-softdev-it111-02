<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Emailv */

$this->title = Yii::t('app', 'Create Emailv');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Emailvs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emailv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
