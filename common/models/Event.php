<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%event}}".
 *
 * @property int $id
 * @property string $image_id
 * @property string $name
 * @property string $short_description
 * @property string|null $club
 * @property int|null $status
 * @property int|null $has_image
 * @property string|null $image_name
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property User $createdBy
 * @property User $updatedBy
 */
class Event extends \yii\db\ActiveRecord
{

    const STATUS_CLOSED = 0;
    const STATUS_OPEN = 1;

    /**
     * @var yii\web\UploadedFile
     */
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%event}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'short_description'], 'required'],
            [['id', 'status', 'has_image', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['short_description'], 'string'],
            [['image_id'], 'string', 'max' => 16],
            [['name'], 'string', 'max' => 255],
            [['club'], 'string', 'max' => 100],
            ['image', 'image', 'minWidth' => 100],
            [['image_name'], 'string', 'max' => 512],
            ['has_image', 'default', 'value' => 0],
            ['status', 'default', 'value' => self::STATUS_OPEN],
            [['image_id'], 'unique'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_id' => 'Image ID',
            'name' => 'Name',
            'short_description' => 'Short Description',
            'club' => 'Club',
            'status' => 'Status',
            'has_image' => 'Has Image',
            'image_name' => 'Image Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    public function getStatusLabels()
    {
        return [
            self::STATUS_OPEN => 'Open',
            self::STATUS_CLOSED => 'Closed',
        ];
    }
    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\EventQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
            $this->image_id = Yii::$app->security->generateRandomString(8);
            $this->image_name = $this->image->name;
        }
        if ($this->image) {
            $this->has_image = 1;
        }

        $saved = parent::save($runValidation, $attributeNames);
        if (!$saved) {
            return false;
        }
        if ($isInsert) {
            $imagePath = Yii::getAlias('@app/web/storage/events/' . $this->image_id . '.jpg');
            if (!is_dir(dirname($imagePath))) {
                FileHelper::createDirectory(dirname($imagePath));
            }
            $this->image->saveAs($imagePath);
        }

        return  true;
    }

    public function getImageLink()
    {
        return $this->has_image ?
            '/storage/events/' . $this->image_id . '.jpg'
            : '';
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $imagePath = Yii::getAlias('@web/storage/events/' . $this->image_id . '.jpg');
        unlink($imagePath);
    }

    public function isCreatedBy($userId)
    {
        return $this->createdBy->username;
    }
}
