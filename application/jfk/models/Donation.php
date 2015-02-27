<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $donationNumber
 * @property integer $amount
 * @property string $country
 * @property string $cardNumber
 * @property string $paymentType
 * @property string $expirationDate
 * @property string $ccv
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $email
 * @property string $phoneType
 * @property string $phoneNumber
 * @property integer $Users_cus_id
 *
 * @property Users $usersCus
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
            [['donationNumber', 'amount', 'cardNumber', 'paymentType', 'expirationDate', 'ccv', 'firstName', 'lastName', 'Users_cus_id'], 'required'],
            [['donationNumber', 'amount', 'Users_cus_id'], 'integer'],
            [['expirationDate'], 'safe'],
            [['firstName', 'phoneType'], 'string'],
            [['country', 'cardNumber', 'paymentType', 'ccv', 'middleName', 'lastName', 'email', 'phoneNumber'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'donationNumber' => 'Donation Number',
            'amount' => 'Amount',
            'country' => 'Country',
            'cardNumber' => 'Card Number',
            'paymentType' => 'Payment Type',
            'expirationDate' => 'Expiration Date',
            'ccv' => 'Ccv',
            'firstName' => 'First Name',
            'middleName' => 'Middle Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'phoneType' => 'Phone Type',
            'phoneNumber' => 'Phone Number',
            'Users_cus_id' => 'Users Cus ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsersCus()
    {
        return $this->hasOne(Users::className(), ['cus_id' => 'Users_cus_id']);
    }
}
