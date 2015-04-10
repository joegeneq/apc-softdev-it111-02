<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $productName
 * @property integer $category_id
 * @property integer $unitCost
 *
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
            [['productName', 'category_id', 'unitCost'], 'required'],
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
            'productName' => Yii::t('app', 'Product Name'),
            'category_id' => Yii::t('app', 'Category ID'),
            'unitCost' => Yii::t('app', 'Unit Cost'),
        ];
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
