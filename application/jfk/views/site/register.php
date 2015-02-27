<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registration */
/* @var $form ActiveForm */

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="register">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>Please fill out the following fields.</p>
    <?php $form = ActiveForm::begin(); ?>
		<?= $form->field($model, 'cus_name') ?>
        <?= $form->field($model, 'uname') ?>
        <?= $form->field($model, 'pass')->passwordInput() ?>
		<?= $form->field($model, 'birthdate') ?>
        <?= $form->field($model, 'contactNumber') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'country') ?>
        <?= $form->field($model, 'address') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- register -->
