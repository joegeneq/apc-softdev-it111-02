<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "subsciber".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $subscriber_email
 *
 * @property Email[] $emails
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
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'subscriber_email' => Yii::t('app', 'Subscriber Email'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Email::className(), ['subsciber_id' => 'id']);
    }

    public function getSubciberEmail(){

        $data = Subsciber::find()->asArray()->all();
        return ArrayHelper::map($data, 'id', 'email');
    }
}
