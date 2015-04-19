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
 <?php// $items = [
                //     [
                //         'url' => 'events/xmas/1.jpg',
                //         'src' => 'events/xmas/1.jpg',
                //     ],

                //     [
                //         'url' => 'events/xmas/2.jpg',
                //         'src' => 'events/xmas/2.jpg',
                //     ],

                //     [
                //         'url' => 'events/xmas/3.jpg',
                //         'src' => 'events/xmas/3.jpg',
                //     ],

                //     [
                //         'url' => 'events/xmas/4.jpg',
                //         'src' => 'events/xmas/4.jpg',
                //     ],

                //     [
                //         'url' => 'events/xmas/5.jpg',
                //         'src' => 'events/xmas/5.jpg',
                //     ],

                //     [
                //         'url' => 'events/xmas/6.jpg',
                //         'src' => 'events/xmas/6.jpg',
                //     ],
                // ];
            ?>
<?php //dosamigos\gallery\Gallery::widget(['items' => $items]);?>  
	<div class="col-lg-1">
        <br><br>
	<a class="btn btn-warning" href="http://localhost/jfk/frontend/web/index.php?r=volunteer%2Fcreate">&raquo; Back</a>
		    </div>
</div>
