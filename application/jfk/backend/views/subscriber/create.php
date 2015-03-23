<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Subsciber */

$this->title = 'Create Subsciber';
$this->params['breadcrumbs'][] = ['label' => 'Subscibers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subsciber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
