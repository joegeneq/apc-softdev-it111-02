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
        ];
    }
}
