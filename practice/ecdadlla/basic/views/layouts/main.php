<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use claudejanz\jquerySlider\widgets\SliderWidget;
use yii\web\JsExpression;
use yii\foundation\widgets\Orbit;
use yii\bootstrap\Carousel;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <div class="wrap">
<script> $('.myCarousel').carousel({ interval: 2000 }) </script>	

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php $this->beginBody() ?>

        <?php
		// a button group using Dropdown widget
/*			echo ButtonDropdown::widget([
				'label' => 'Action',
				'dropdown' => [
				'items' => [
					['label' => 'Company About', 'url' => '/site/contact'],
					['label' => 'Company Contact', 'url' => '/site/about'],
        ],
    ],
]);*/
//			echo 	CHtml::image([
//			Yii::app()->request->baseUrl."/images/01.jpg", "LOGO"),
			
			
//			]);
		
       NavBar::begin([
//			<div id="logo">
//			<?php echo CHtml::image([Yii::app()->request->baseUrl."/images/1.jpg","ballpop"]); </div> 	
                'brandLabel' => 'Joy For Kids Universal Foundation, Inc.',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
           echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
					['label' => 'Sign-Up', 'url' => ['/site/contact']],
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
/*			
			echo Carousel::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					// equivalent to the above
					[
					'content' => '<img src="/images/1.jpg"/>'
					],
					// the item contains both the image and the caption
				[
					'content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg"/>',
					'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
 //          		 'options' => [...],
				],
						]
							]);*/
/*			
			SliderWidget::begin([
				'responsive' => true,
				'options'=>['style'=>'position: relative; top: 0px; left: 0px; width: 600px; height: 300px;'],
				'pluginOptions' => [
				'$AutoPlay' => true,
				'$AutoPlayInterval' => 6000,
				'$SlideDuration' => 800,
				'$SlideshowOptions' => [
				'$Class' => new JsExpression('$JssorSlideshowRunner$'),
				'$Transitions' => [
                ['$Duration' => 700, '$Opacity' => 2, '$Brother' => ['$Duration' => 1000, '$Opacity' => 2]]
								]
					]
				]
			]);
				echo '<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
                    <div><img u="image" src="images/01.jpg" /></div>
                    <div><img u="image" src="images/02.jpg" /></div>
					</div>';
			SliderWidget::end();
*/
/*		echo foundation\widgets\Orbit::display(array(
'htmlOptions' => array('style' => 'width:645px'),
'items' => array(
array(
'content' => '<img src="/images/1.jpg" alt="slide image">',
'caption' => 'Mi caption 1'),
array(
'content' => '<img src="/images/2.jpg" alt="slide image">',
'caption' => 'Mi caption 2')
)
)); */
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
