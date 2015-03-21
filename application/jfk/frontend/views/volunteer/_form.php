<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Volunteer */
/* @var $form yii\widgets\ActiveForm */
?>
<section id="float-left-events">
<div class="col-lg-7">
<h1>Meaningful Involvements</h1>

<br>
<br>

<p>
      2013 Events: <br>
	  JFK (Joy for Kids) Spend Christmas Time with Children.<br>
	  Location: San Pedro, Laguna <br>
	  Description: JFK team went to San Pedro, Laguna to have a Christmas gathering with street children to have fun and present them with gifts prepared 
				by the team. <br> <br>
				 <a class="btn btn-default" href="index.php?r=site%2Fgallery2013">View Gallery &raquo;</a></p>
			
<br>
<br>
	  
	  2014 Events: <br>
	  JFK (Joy for Kids) 20th Birthday Bash<br>
	  Location: TBA <br> 
	  insert pictures: <br>
	  Description: A 20 year-old girl spending her birthday creating a charity event for students from Sibol, Pasig. <br><br>
	  <a class="btn btn-default" href="index.php?r=site%2Fgallery2014">View Gallery &raquo;</a></p>
	  
    </p>

</div>
</aside>
<aside id="aside-be-a-volunteer">
<div class="volunteer-form">

<h1 id="volunteer"> Be a Volunteer! </h1>

<br>
<br>

<p> Be part of Joy For Kids programs and see their smile</p> <!--insert smiley logo-->

<br>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['rows' => 1]) ?> <!--"textarea before, now textInput"-->

    <?= $form->field($model, 'last_name')->textInput(['rows' => 1]) ?> <!--"textarea before, now textInput"-->

    <?= $form->field($model, 'volunteer_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_number1')->textInput() ?>

    <?= $form->field($model, 'contact_number2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</aside>
