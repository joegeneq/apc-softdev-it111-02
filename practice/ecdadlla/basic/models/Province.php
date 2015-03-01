<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Province".
 *
 * @property integer $province_id
 * @property string $province_code
 * @property string $province_description
 * @property integer $region_region_id
 *
 * @property City[] $cities
 * @property Region $regionRegion
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_region_id'], 'required'],
            [['region_region_id'], 'integer'],
            [['province_code', 'province_description'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_code' => 'Province Code',
            'province_description' => 'Province Description',
            'region_region_id' => 'Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['province_province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegionRegion()
    {
        return $this->hasOne(Region::className(), ['region_id' => 'region_region_id']);
    }
}
