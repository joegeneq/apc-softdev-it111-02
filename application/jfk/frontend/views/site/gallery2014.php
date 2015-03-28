<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '2014 Gallery';

?>
<div class="site-events">
		</br>
		<div class="row">
            <div class="col-lg-11">
    <h1><?= Html::encode($this->title) ?></h1>
			</div>
			
  </div>
   <?php $items = [
    [
        'url' => 'images/jfk2014/1.jpg',
        'src' => 'images/jfk2014/1.jpg',
    ],
    [
        'url' => 'images/jfk2014/2.jpg',
        'src' => 'images/jfk2014/2.jpg',
    ],
    [
        'url' => 'images/jfk2014/3.jpg',
        'src' => 'images/jfk2014/3.jpg',
    ],
    [
        'url' => 'images/jfk2014/4.jpg',
        'src' => 'images/jfk2014/4.jpg',
    ],
    [
        'url' => 'images/jfk2014/5.jpg',
        'src' => 'images/jfk2014/5.jpg',
    ],
    [
        'url' => 'images/jfk2014/6.jpg',
        'src' => 'images/jfk2014/6.jpg',
    ],
    [
        'url' => 'images/jfk2014/7.jpg',
        'src' => 'images/jfk2014/7.jpg',
    ],
    [
        'url' => 'images/jfk2014/8.jpg',
        'src' => 'images/jfk2014/8.jpg',
    ],
    [
        'url' => 'images/jfk2014/9.jpg',
        'src' => 'images/jfk2014/9.jpg',
    ],
    [
        'url' => 'images/jfk2014/10.jpg',
        'src' => 'images/jfk2014/10.jpg',
    ],
    [
        'url' => 'images/jfk2014/11.jpg',
        'src' => 'images/jfk2014/11.jpg',
    ],
    [
        'url' => 'images/jfk2014/12.jpg',
        'src' => 'images/jfk2014/12.jpg',
    ],
	[
        'url' => 'images/jfk2014/13.jpg',
        'src' => 'images/jfk2014/13.jpg',
    ],
    [
        'url' => 'images/jfk2014/14.jpg',
        'src' => 'images/jfk2014/14.jpg',
    ],
];?>

<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?> 
  <br><br>
<div class="col-lg-1">
		<a class="back-gallery" href="http://localhost/jfk/frontend/web/index.php?r=volunteer%2Fcreate">&raquo; Back</a>
		    </div>
   
</div>
