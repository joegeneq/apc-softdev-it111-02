<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $item_type
 * @property string $price
 * @property string $size
 * @property string $color
 * @property integer $items_available
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
            [['items_available'], 'required'],
            [['items_available'], 'integer'],
            [['item_type', 'size', 'color'], 'string', 'max' => 45]
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
            'price' => 'Price',
            'size' => 'Size',
            'color' => 'Color',
            'items_available' => 'Items Available',
        ];
    }
}
