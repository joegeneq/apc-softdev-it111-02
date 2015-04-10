<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Size */

$this->title = Yii::t('app', 'Create Size');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sizes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="size-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
