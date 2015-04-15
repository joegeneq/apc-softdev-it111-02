<?php

namespace backend\models;

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
 * @property string $status
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
            [['first_name', 'last_name', 'volunteer_email'], 'required'],
<<<<<<< HEAD
            [['first_name', 'last_name', 'status'], 'string'],
            [['volunteer_email'], 'string', 'max' => 45],
            [['contact_number1', 'contact_number2'], 'string', 'max' => 11]
=======
		    [['contact_number1', 'contact_number2'], 'safe'],
            [['first_name', 'last_name'], 'string'],
            [['contact_number1', 'contact_number2'], 'integer'],
            [['volunteer_email'], 'string', 'max' => 45]
>>>>>>> 82dadb385458bd0d92cdbd09523c226b48f1251e
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'volunteer_email' => Yii::t('app', 'Volunteer Email'),
            'contact_number1' => Yii::t('app', 'Contact Number1'),
            'contact_number2' => Yii::t('app', 'Contact Number2'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
