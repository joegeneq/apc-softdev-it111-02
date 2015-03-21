<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $id
 * @property integer $amount
 * @property string $card_num
 * @property string $expiry_date
 * @property string $ccv
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property integer $user_id
 *
 * @property Country[] $countries
 * @property User $user
 * @property Phone[] $phones
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
            [['amount', 'card_num', 'expiry_date', 'ccv', 'first_name', 'last_name', 'email', 'phone_number', 'user_id'], 'required'],
            [['amount', 'user_id'], 'integer'],
            [['expiry_date'], 'safe'],
            [['first_name', 'middle_name', 'last_name'], 'string'],
            [['card_num', 'ccv', 'email', 'phone_number'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'card_num' => 'Card Num',
            'expiry_date' => 'Expiry Date',
            'ccv' => 'Ccv',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['donation_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['donation_id' => 'id']);
    }
}
