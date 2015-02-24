<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Shop';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-shop">
<!-- CHANGE THE CLASS TO SITE SHOP BUT ADD DETAILS TO CLASS FIRST-->
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		I tried to edit this page.
		If this is working, you'll be able to see the shop page right now.
        This is the SHOP page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
