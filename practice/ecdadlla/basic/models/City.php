<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "City".
 *
 * @property integer $city_id
 * @property string $city_code
 * @property string $city_description
 * @property integer $province_province_id
 *
 * @property Province $provinceProvince
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'City';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_province_id'], 'required'],
            [['province_province_id'], 'integer'],
            [['city_code']],
			[['city_description'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city_code' => 'City Code',
            'city_description' => 'City Description',
            'province_province_id' => 'Province ID',
			'province_province_code' => 'Province Code'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinceProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_province_id']);
    }
}
