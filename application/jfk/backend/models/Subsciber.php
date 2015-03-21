<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subsciber".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $subscriber_email
 */
class Subsciber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subsciber';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'subscriber_email'], 'required'],
            [['first_name', 'last_name'], 'string'],
            [['subscriber_email'], 'string', 'max' => 45]
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
            'subscriber_email' => 'Subscriber Email',
        ];
    }
}
