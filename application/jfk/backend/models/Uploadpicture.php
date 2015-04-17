<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "uploadpicture".
 *
 * @property integer $id
 * @property integer $events_eventID
 * @property string $picture
 *
 * @property Events $eventsEvent
 */
class Uploadpicture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'uploadpicture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['events_eventID'], 'required'],
            [['events_eventID'], 'integer'],
            [['file'],'file'],
            [['picture'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'events_eventID' => Yii::t('app', 'Events Event ID'),
            'picture' => Yii::t('app', 'Picture'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventsEvent()
    {
        return $this->hasOne(Events::className(), ['eventID' => 'events_eventID']);
    }

    public function getEventsName()
    {
        return $this->events_eventName;

    }
}
