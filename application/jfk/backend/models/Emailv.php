<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emailv".
 *
 * @property integer $id
 * @property string $subject
 * @property string $content
 * @property string $attachment
 */
class Emailv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'emailv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'content'], 'required'],
            [['content'], 'string'],
            [['file'],'file'],
            [['subject'], 'string', 'max' => 45],
            [['attachment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject' => Yii::t('app', 'Subject'),
            'content' => Yii::t('app', 'Content'),
            'attachment' => Yii::t('app', 'Attachment'),
        ];
    }
}
