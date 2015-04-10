<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

$this->title = Yii::t('app', 'Shop');
?>
<div class="order-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
