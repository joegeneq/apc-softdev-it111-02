<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $item_type
 * @property string $item_name
 * @property string $price
 * @property string $size
 * @property string $color
 * @property integer $purchase_details_id
 * @property integer $purchase_details_user_id
 *
 * @property PurchaseDetails $purchaseDetails
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
            [['price'], 'number'],
            [['purchase_details_id', 'purchase_details_user_id'], 'required'],
            [['purchase_details_id', 'purchase_details_user_id'], 'integer'],
            [['item_type', 'item_name', 'size', 'color'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_type' => 'Item Type',
            'item_name' => 'Item Name',
            'price' => 'Price',
            'size' => 'Size',
            'color' => 'Color',
            'purchase_details_id' => 'Purchase Details ID',
            'purchase_details_user_id' => 'Purchase Details User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseDetails()
    {
        return $this->hasOne(PurchaseDetails::className(), ['id' => 'purchase_details_id', 'user_id' => 'purchase_details_user_id']);
    }
}
