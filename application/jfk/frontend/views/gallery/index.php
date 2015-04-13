<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\tabs\TabsX;
use backend\models\Gallery;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gallery');

?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_LEFT,
    'encodeLabels'=>false]);?>

    
</div>
