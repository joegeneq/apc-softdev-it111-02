<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $region_id
 * @property string $region_code
 * @property string $region_description
 *
 * @property Province $province
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_code', 'region_description'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'region_code' => 'Region Code',
            'region_description' => 'Region Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'region_id']);
    }
}
