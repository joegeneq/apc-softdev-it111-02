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

    <br><br>
    <?php echo TabsX::widget([
    'position' => TabsX::POS_LEFT,
    'align' => TabsX::ALIGN_LEFT,
    'items' => [
        [
            'label' => 'Gallery One',
            'content' => 'Anim pariatur cliche...',
            'active' => true
        ],
        [
            'label' => 'Gallery 2',
            'content' => 'Anim pariatur cliche...',
            'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Dropdown',
            'items' => [
                 [
                     'label' => 'DropdownA',
                     'content' => 'DropdownA >> Anim pariatur cliche...',
                 ],
                 [
                     'label' => 'DropdownB',
                     'content' => 'DropdownB, Anim pariatur cliche...',
                 ],
            ],
        ],
    ],
]);

?>    
</div>
