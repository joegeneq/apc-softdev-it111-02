<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Donate';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-donate">
		</br>
    <h1><?= Html::encode($this->title) ?></h1>

	<?php
//Place the Paypal configuration array inside your 'components' definitions

	// application components
	//i> 'components'=>array(
            
	//i>	'Paypal' => array(
	//i>		'class'=>'application.components.Paypal',
	//i>		'apiUsername' => 'YOUR_API_USERNAME',
	//i>		'apiPassword' => 'YOUR_API_PASSWORD',
	//i>		'apiSignature' => 'YOUR_API_SIGNATURE',
	//i>		'apiLive' => false,
			
	//i>		'returnUrl' => 'paypal/confirm/', //regardless of url management component
	//i>		'cancelUrl' => 'paypal/cancel/', //regardless of url management component
	//i>	),
	//i>),
//i> );
?>
	
    <p>
        This is the Donate page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
