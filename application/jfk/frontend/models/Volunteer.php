<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $volunteer_email
 * @property string $contact_number1
 * @property string $contact_number2
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'volunteer_email', 'contact_number1', 'contact_number2'], 'required'],
            [['first_name', 'last_name'], 'string'],
            [['volunteer_email'], 'string', 'max' => 45],
            [['contact_number1', 'contact_number2'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'volunteer_email' => 'Volunteer Email',
            'contact_number1' => 'Contact Number1',
            'contact_number2' => 'Contact Number2',
        ];
    }
}
