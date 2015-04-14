<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Subsciber */

$this->title = Yii::t('app', 'Create Subsciber');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscibers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subsciber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
