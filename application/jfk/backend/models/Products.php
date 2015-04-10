<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $productName
 * @property integer $unitCost
 *
 * @property Order[] $orders
 * @property Productdetails[] $productdetails
 * @property Category $category
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'productName', 'unitCost'], 'required'],
            [['category_id', 'unitCost'], 'integer'],
            [['productName'], 'string', 'max' => 45]
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
            'productName' => Yii::t('app', 'Product Name'),
            'unitCost' => Yii::t('app', 'Unit Cost'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['products_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductdetails()
    {
        return $this->hasMany(Productdetails::className(), ['products_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
