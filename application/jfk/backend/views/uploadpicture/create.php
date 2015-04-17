<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Uploadpicture */

$this->title = Yii::t('app', 'Create Upload Picture');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uploadpictures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadpicture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
