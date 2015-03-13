<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Subsciber */

//$this->title = 'Create Subsciber!';
//$this->params['breadcrumbs'][] = ['label' => 'Subscibers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subsciber-create">

	<h1>Be Updated!</h1>
    <!--<h1><insert QUESTION_MARK to be a php file after equals= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
