<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property integer $id
 * @property string $color
 *
 * @property Order[] $orders
 * @property Productcolor[] $productcolors
 * @property Products[] $products
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'color';
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
        return $this->hasMany(Order::className(), ['color_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductcolors()
    {
        return $this->hasMany(Productcolor::className(), ['color_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id' => 'products_id'])->viaTable('productcolor', ['color_id' => 'id']);
    }

}
