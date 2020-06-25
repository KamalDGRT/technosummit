<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\imagine\Image;


/**
 * This is the model class for table "{{%events}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image_name
 * @property string|null $image_id
 * @property int|null $status
 * @property string|null $club
 * @property string|null $short_description
 * @property int $created_at
 */
class Events extends \yii\db\ActiveRecord
{
    const STATUS_CLOSED = 0;
    const STATUS_OPEN = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%events}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'created_at'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['name', 'image_name', 'image_id', 'short_description'], 'string', 'max' => 255],
            [['club'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image_name' => 'Image',
            'image_id' => 'Image ID',
            'status' => 'Status',
            'club' => 'Club',
            'short_description' => 'Short Description',
            'created_at' => 'Created At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\EventsQuery(get_called_class());
    }

    public function getStatusLabels()
    {
        return [
            self::STATUS_OPEN => 'Open',
            self::STATUS_CLOSED => 'Closed',
        ];
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
            $this->image_id = Yii::$app->security->generateRandomString(8);
            $this->image_name = $this->image;
            $this->video_name = $this->video->name;
        }
        if ($this->thumbnail) {
            $this->has_thumbnail = 1;
        }
        $saved = parent::save($runValidation, $attributeNames);
        if (!$saved) {
            return false;
        }
        if ($isInsert) {
            $videoPath = Yii::getAlias('@frontend/web/storage/videos/' . $this->video_id . '.mp4');
            if (!is_dir(dirname($videoPath))) {
                FileHelper::createDirectory(dirname($videoPath));
            }
            $this->video->saveAs($videoPath);
        }
        if ($this->thumbnail) {
            $thumbnailPath = Yii::getAlias('@frontend/web/storage/thumbs/' . $this->video_id . '.jpg');
            if (!is_dir(dirname($thumbnailPath))) {
                FileHelper::createDirectory(dirname($thumbnailPath));
            }
            $this->thumbnail->saveAs($thumbnailPath);
            Image::getImagine()
                ->open($thumbnailPath)
                ->thumbnail(new Box(1280, 1280))
                ->save();
        }

        return true;
    }
}
