<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $galleryID
 * @property string $galleryName
 * @property string $galleryDesc
 * @property string $galleryFolder
 * @property string $galleryYear
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['galleryName', 'galleryDesc', 'galleryFolder', 'galleryYear'], 'required'],
            [['galleryName', 'galleryDesc', 'galleryFolder', 'galleryYear'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'galleryID' => Yii::t('app', 'Gallery ID'),
            'galleryName' => Yii::t('app', 'Gallery Name'),
            'galleryDesc' => Yii::t('app', 'Gallery Desc'),
            'galleryFolder' => Yii::t('app', 'Gallery Folder'),
            'galleryYear' => Yii::t('app', 'Gallery Year'),
        ];
    }
}
