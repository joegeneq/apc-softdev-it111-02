<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "email".
 *
 * @property integer $id
 * @property integer $subsciber_id
 * @property string $subject
 * @property string $content
 * @property string $attachment
 *
 * @property Subsciber $subsciber
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subsciber_id', 'subject', 'content'], 'required'],
            [['subsciber_id'], 'integer'],
            [['content'], 'string'],
            [['subject', 'attachment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subsciber_id' => Yii::t('app', 'Subsciber ID'),
            'subject' => Yii::t('app', 'Subject'),
            'content' => Yii::t('app', 'Content'),
            'attachment' => Yii::t('app', 'Attachment'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubsciber()
    {
        return $this->hasOne(Subsciber::className(), ['id' => 'subsciber_id']);
    }

     public function getSubsciberEmail(){

        
    }
}
