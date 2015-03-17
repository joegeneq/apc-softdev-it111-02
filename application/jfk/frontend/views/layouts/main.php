<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">

        <?php
             NavBar::begin([
                'brandLabel' => '<img src="../web/images/Joy-For-Kids-Website-Logo.png">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
				//['label' => 'Programs', 'url' => ['/site/programs']],
			    ['label' => 'Programs', 'url' => ['/volunteer/create']],
               ['label' => 'Donate', 'url' => ['/donation/create']],
				['label' => 'Shop', 'url' => ['/site/shop']],
				
				//['label' => 'Contact']
            ];
			 
			//$contact = ['+63 27369686    inquiry@jfkuniversal.org '];
			//echo "contact";
			
            //if (Yii::$app->user->isGuest) {
            //   $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            //    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            //} else {
            //    $menuItems[] = [
            //        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            //        'url' => ['/site/logout'],
            //        'linkOptions' => ['data-method' => 'post']
            //    ];
            //}
            echo Nav::widget([
               'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
				
            ]);
            NavBar::end();
        ?>
        
        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Joy For Kids Universal Foundation <?= date('') ?></p>
        <!--<p class="pull-right">-->   <!--<insertQUESTION MARK= Yii::powered() ?>-->     <!--</p>-->
		<p class="pull-right">+63 27369686    à inquiry@jfkuniversal.org  </p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
