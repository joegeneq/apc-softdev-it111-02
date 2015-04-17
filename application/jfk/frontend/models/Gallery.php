<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property string $gallery_name
 * @property string $gallery_description
 * @property string $gallery_pictures
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
            [['gallery_name', 'gallery_description', 'gallery_pictures'], 'required'],
            [['gallery_name', 'gallery_description', 'gallery_pictures'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'gallery_name' => Yii::t('app', 'Gallery Name'),
            'gallery_description' => Yii::t('app', 'Gallery Description'),
            'gallery_pictures' => Yii::t('app', 'Gallery Pictures'),
        ];
    }
}
