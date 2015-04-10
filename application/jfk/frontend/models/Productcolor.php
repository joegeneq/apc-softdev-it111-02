<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productcolor".
 *
 * @property integer $id
 * @property string $color
 *
 * @property Order[] $orders
 * @property Productdetails[] $productdetails
 */
class Productcolor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productcolor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color'], 'required'],
            [['color'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'color' => Yii::t('app', 'Color'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['productcolor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductdetails()
    {
        return $this->hasMany(Productdetails::className(), ['productcolor_id' => 'id']);
    }
}
