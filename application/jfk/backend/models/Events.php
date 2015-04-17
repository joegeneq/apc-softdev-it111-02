<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "events".
 *
 * @property integer $eventID
 * @property string $eventName
 * @property string $eventDesc
 * @property string $eventLocation
 * @property string $eventDate
 * @property string $pictures
 *
 * @property Uploadpicture[] $uploadpictures
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;
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
            [['image'],'file', 'extensions'=>'jpg, gif, png'],
            [['pictures'],'safe'],
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

    public function getImageFile()
    {
        return isset($this->avatar) ? Yii::$app->params['uploadPath'] . $this->avatar : null;
    }

    public function getImageUrl()
    {
        $avatar = isset($this->avatar) ? $this->avatar : 'default_user.jpg';
        return Yii::$app->params['uploadUrl'] . $avatar;
    }

    public function uploadImage()
    {
        $image = UploadedFile::getInstance($this, 'image');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        $this->filename = $image->name;
        $ext = end((explode(".", $image->name)));

        return $image;
    }

     public function deleteImage() {
        
        $file = $this->getImageFile();
 
        // check if file exists on server
        if (empty($file) || !file_exists($file)) {
            return false;
        }
 
        // check if uploaded file can be deleted on server
        if (!unlink($file)) {
            return false;
        }
 
        // if deletion successful, reset your file attributes
        $this->avatar = null;
        $this->filename = null;
 
        return true;
    }
}
