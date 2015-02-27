<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $reg_id
 * @property string $cus_name
 * @property string $birthdate
 * @property string $contactNumber
 * @property string $email
 * @property string $uname
 * @property string $pass
 * @property string $country
 * @property string $address
 *
 * @property Users[] $users
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['birthdate'], 'safe'],
                [['cus_name', 'contactNumber','email', 'uname', 'pass', 'country', 'address'], 'required'],
                ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'cus_name' => 'Customer Name',
            'birthdate' => 'Birth Date',
            'contactNumber' => 'Contact Number',
            'email' => 'Email',
            'uname' => 'Username',
            'pass' => 'Password',
            'country' => 'Country',
            'address' => 'Address',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['Registration_reg_id' => 'reg_id']);
    }
/*
    public function register() 
    {   
        
        if ($this->validate()) {
         $form = new Registration();
         $form->cus_name = $this->cus_name;
         $form->uname = $this->uname;
         $form->pass = $this->pass;
         $form->birthdate = $this->birthdate;
         $form->contactNumber = $this->contactNumber;
         $form->email = $this->email;
         $form->country = $this->country;
         $form->address = $this->address;
         $form->save();

        return true;
    } else {
return false;
}
*/
}
