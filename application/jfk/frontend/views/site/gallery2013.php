<?php
use yii\helpers\Html;
use foundation\helpers\ArrayHelper;

/* @var $this yii\web\View */
$this->title = '2013 Gallery';

?>
<div class="site-events">
		
		<div class="row">
            <div class="col-lg-11">
    <h1><?= Html::encode($this->title) ?></h1>
				</div>
			
  </div>
<?php $items = [
    [
        'url' => 'images/xmas/1.jpg',
        'src' => 'images/xmas/1.jpg',
    ],
    [
        'url' => 'images/xmas/2.jpg',
        'src' => 'images/xmas/2.jpg',
    ],
    [
        'url' => 'images/xmas/3.jpg',
        'src' => 'images/xmas/3.jpg',
    ],
    [
        'url' => 'images/xmas/4.jpg',
        'src' => 'images/xmas/4.jpg',
    ],
    [
        'url' => 'images/xmas/5.jpg',
        'src' => 'images/xmas/5.jpg',
    ],
    [
        'url' => 'images/xmas/6.jpg',
        'src' => 'images/xmas/6.jpg',
    ],
];?>
<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>  
	<div class="col-lg-1">
	<a class="back-gallery" href="http://localhost/jfk/frontend/web/index.php?r=volunteer%2Fcreate">&raquo; Back</a>
		    </div>
</div>
