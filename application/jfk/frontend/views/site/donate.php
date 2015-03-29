<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
//$this->title = 'Donate';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-donate">
		</br>
    <h1><?= Html::encode($this->title) ?></h1>

	
	
    <p>
	Click 
       				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="BZQ5N3UKRZF4Y">
				<input type="image" src="http://i57.tinypic.com/aynitv.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				
	to redirect to Paypal.
    </p>

   
</div>
