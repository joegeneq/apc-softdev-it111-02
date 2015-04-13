<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $galleryID
 * @property string $galleryName
 * @property string $galleryDesc
 * @property string $galleryDate
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
            [['galleryName', 'galleryDesc', 'galleryDate'], 'required'],
            [['galleryDate'], 'safe'],
            [['galleryName', 'galleryDesc'], 'string', 'max' => 255]
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
            'galleryDate' => Yii::t('app', 'Gallery Date'),
        ];
    }
}
