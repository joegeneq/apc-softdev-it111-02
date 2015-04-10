<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Productcolor */

$this->title = Yii::t('app', 'Create Productcolor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productcolors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcolor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
