<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $eventID
 * @property string $eventName
 * @property string $eventDesc
 * @property string $eventLocation
 * @property string $eventDate
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
            [['eventDate'], 'safe'],
            [['eventName', 'eventDesc', 'eventLocation'], 'string', 'max' => 255]
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

    public function getEvents(){
        
                
    }
}   

