<?php
use backend\assets\AppAsset;
//use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

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
                ['label' => 'Volunteer', 'url' => ['volunteer/index']],
                ['label' => 'Subscribe', 'url' => ['/subscriber/index']],
                [
                    'label' => 'Products',
                    'items' => [
                        ['label' => 'View Products', 'url' => ['/products/index']],
                        ['label' => 'View Product Categories', 'url'=> ['/category/index']],
                        ['label' => 'View Product Details', 'url'=> ['/productdetails/index']],
                        ['label' => 'View Sizes', 'url' => ['/productsize/index']],
                        ['label' => 'View Colors', 'url' => ['/productcolor/index']],
             //           ['label' => 'View Sizes', 'url' => ['/size/index']],
             //           ['label' => 'View Colors', 'url' => ['/color/index']],
        
        
                ]], 
                [
                    'label' => 'Orders',
                    'items' => [
                        ['label' => 'View Orders', 'url' => ['/order/index']],
                        ['label' => 'Create Order', 'url' => ['/order/create']],
                        
                ]],
                ];
                
                
                
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
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
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Joy For Kids Universal Foundation <?= date('Y') ?></p>
        <p class="pull-right">+63 27369686    à inquiry@jfkuniversal.org</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
