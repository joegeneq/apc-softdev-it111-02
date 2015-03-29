<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* $this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title; */
?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="site-shop">
	
	 <div class="row">
				<div class="col-lg-17">
	
					<div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>JFK Shirt</h2>

                <?= Html::img('images/shirt.jpg');?>
				</br>
				</br>
                <p>
				
				</p>
            </div>
            <div class="col-lg-4">
                <h2>JFK Mug</h2>

                <?= Html::img('images/cap.jpg');?>
                <p>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="7BGMSDDV6PF5Q">
				<table>
				<tr><td><input type="hidden" name="on0" value="Color">Color</td></tr><tr><td><select name="os0">
				<br>
					<option value="White">White P150.00 PHP</option>
					<option value="Sky Blue">Sky Blue P150.00 PHP</option>
					<option value="Black">Black P150.00 PHP</option>
				</select> </td></tr>
				</table>
				<br>
				<input type="hidden" name="currency_code" value="PHP">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				</p>
            </div>
            <div class="col-lg-4">
                <h2>JFK Cap</h2>

                <?= Html::img('images/mug.jpg');?>
				
                <p>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="XSRVL38PJF584">
				<table>
				<tr><td><input type="hidden" name="on0" value="Color">Color</td></tr>
				
				
				<tr><td><select name="os0">
					<option value="White">White P80.00 PHP</option>
					<option value="Sky Blue">Sky Blue P80.00 PHP</option>
					<option value="Black">Black P80.00 PHP</option>
				</select> </td></tr>
				</table>

				<br>
				
				<input type="hidden" name="currency_code" value="PHP">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

				</p>
            </div>
        </div>

    </div>
					</div>
					</div>

</div>
