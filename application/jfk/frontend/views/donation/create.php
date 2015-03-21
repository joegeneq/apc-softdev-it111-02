<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Donation */

$this->title = 'Donation';
//$this->params['breadcrumbs'][] = ['label' => 'Donations', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donation-create">

   <br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
