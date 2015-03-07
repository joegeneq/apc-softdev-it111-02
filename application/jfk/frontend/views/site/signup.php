<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                
                <?= $form->field($model, 'first_name') ?>
                <?= $form->field($model, 'last_name') ?>
                <?= $form->field($model, 'birthdate')->widget(
                    DatePicker::className(), [
                     // inline too, not bad
                    'inline' => false, 
                    // modify template for custom rendering
                    // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                     'autoclose' => true,
                    'format' => 'yyyy-M-dd'
        ]
]);?>
                <?= $form->field($model, 'contact_Number') ?>
                <?= $form->field($model, 'address') ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
