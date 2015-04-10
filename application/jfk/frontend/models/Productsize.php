<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productsize".
 *
 * @property integer $id
 * @property string $size
 *
 * @property Order[] $orders
 * @property Productdetails[] $productdetails
 */
class Productsize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productsize';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size'], 'required'],
            [['size'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'size' => Yii::t('app', 'Size'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['productsize_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductdetails()
    {
        return $this->hasMany(Productdetails::className(), ['productsize_id' => 'id']);
    }
}
