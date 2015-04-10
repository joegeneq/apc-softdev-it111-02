<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $products_id
 * @property integer $productsize_id
 * @property integer $productcolor_id
 * @property integer $unitCost
 * @property integer $quantity
 * @property integer $totalPrice
 * @property string $date_created
 *
 * @property Category $category
 * @property Productcolor $productcolor
 * @property Products $products
 * @property Productsize $productsize
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'products_id', 'productcolor_id', 'unitCost', 'quantity', 'totalPrice'], 'required'],
            [['category_id', 'products_id', 'productsize_id', 'productcolor_id', 'unitCost', 'quantity', 'totalPrice'], 'integer'],
            [['date_created'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'products_id' => Yii::t('app', 'Products ID'),
            'productsize_id' => Yii::t('app', 'Productsize ID'),
            'productcolor_id' => Yii::t('app', 'Productcolor ID'),
            'unitCost' => Yii::t('app', 'Unit Cost'),
            'quantity' => Yii::t('app', 'Quantity'),
            'totalPrice' => Yii::t('app', 'Total Price'),
            'date_created' => Yii::t('app', 'Date Created'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductcolor()
    {
        return $this->hasOne(Productcolor::className(), ['id' => 'productcolor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'products_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsize()
    {
        return $this->hasOne(Productsize::className(), ['id' => 'productsize_id']);
    }
}
