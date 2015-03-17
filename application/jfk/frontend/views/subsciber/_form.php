<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subsciber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subsciber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['rows' => 1]) ?><!--textInput before is textarea-->

    <?= $form->field($model, 'last_name')->textInput(['rows' => 1]) ?><!--textInput before is textarea-->

    <?= $form->field($model, 'subscriber_email')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

    <?php ActiveForm::end(); ?>

</div>
