<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "productdetails".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $products_id
 * @property integer $productsize_id
 * @property integer $productcolor_id
 * @property integer $unitCost
 * @property integer $itemsOnHand
 *
 * @property Productcolor $productcolor
 * @property Products $products
 * @property Productsize $productsize
 * @property Category $category
 */
class Productdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'products_id', 'productcolor_id', 'unitCost', 'itemsOnHand'], 'required'],
            [['productsize_id'],'safe'],
            [['category_id', 'products_id', 'productsize_id', 'productcolor_id', 'unitCost', 'itemsOnHand'], 'integer']
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
            'itemsOnHand' => Yii::t('app', 'Items On Hand'),
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
