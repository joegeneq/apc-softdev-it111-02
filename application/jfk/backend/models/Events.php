<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $eventID
 * @property string $eventName
 * @property string $eventDesc
 * @property string $eventLocation
 * @property string $eventDate
 *
 * @property Uploadpicture[] $uploadpictures
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventName', 'eventDesc', 'eventLocation', 'eventDate'], 'required'],
            [['eventName', 'eventDesc', 'eventLocation', 'eventDate'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eventID' => Yii::t('app', 'Event ID'),
            'eventName' => Yii::t('app', 'Event Name'),
            'eventDesc' => Yii::t('app', 'Event Desc'),
            'eventLocation' => Yii::t('app', 'Event Location'),
            'eventDate' => Yii::t('app', 'Event Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUploadpictures()
    {
        return $this->hasMany(Uploadpicture::className(), ['events_eventID' => 'eventID']);
    }

    public function getEventName()
    {
        return $this->eventName;
    }
}
