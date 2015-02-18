<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $donation_no
 * @property integer $donate_amount
 */
class Donation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donate_amount'], 'required'],
            [['donate_amount'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'donation_no' => 'Donation No',
            'donate_amount' => 'Donate Amount',
        ];
    }
}
