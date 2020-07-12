<?php

namespace common\models;

use Imagine\Image\Box;
use Yii;
use yii\helpers\FileHelper;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\imagine\Image;

/**
 * This is the model class for table "{{%event_registration}}".
 *
 * @property int $id
 * @property string $image_id
 * @property string $r_name
 * @property string $r_email
 * @property string $r_phone
 * @property string $r_college
 * @property int $r_year
 * @property string $r_city
 * @property string $r_state
 * @property int $r_event
 * @property int|null $status
 * @property int|null $has_image
 * @property string|null $image_name
 * @property string $r_transaction_id
 * @property int|null $created_at
 * @property string $created_by
 */
class EventRegistration extends \yii\db\ActiveRecord
{
    const STATUS_NOT_CONFIRMED = 0;
    const STATUS_COMFIRMED = 1;

    /**
     * @var \yii\web\UploadedFile
     */
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%event_registration}}';
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
            [['r_name', 'r_email', 'r_phone', 'r_college', 'r_year', 'r_city', 'r_state', 'r_event', 'r_transaction_id'], 'required'],
            [['r_year', 'r_event', 'status', 'has_image', 'created_at'], 'integer'],
            [['image_id'], 'string', 'max' => 16],
            [['r_name', 'r_email', 'r_phone', 'r_college', 'r_city', 'r_state', 'r_transaction_id', 'created_by'], 'string', 'max' => 255],
            [['image_name'], 'string', 'max' => 512],
            ['has_image', 'default', 'value' => 0],
            ['status', 'default', 'value' => self::STATUS_NOT_CONFIRMED],
            [['image_id'], 'unique'],
            ['image', 'image', 'minWidth' => 100],
            [['r_salutation','created_by'], 'default', 'value' => null],
            ['r_phone', 'match', 'pattern' => '/^[0-9]{10}$/', 'message' => 'Enter a valid 10 digit phone number.'],
            ['r_transaction_id', 'unique','message'=> 'Enter a valid Transaction ID!']
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
            'r_name' => 'Name',
            'r_email' => 'Email Address',
            'r_phone' => 'Phone Number',
            'r_college' => 'College/Institution Name',
            'r_year' => 'Year',
            'r_city' => 'City',
            'r_state' => 'State',
            'r_event' => 'Event',
            'status' => 'Status',
            'has_image' => 'Has Image',
            'image_name' => 'Image Name',
            'r_transaction_id' => 'Transaction ID',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    public function getYearLabels()
    {
        return [
            0 => 'Expected Graduation Year',
            1 => '2024',
            2 => '2023',
            3 => '2022',
            4 => '2021',
            5 => '2020'
        ];
    }

    public function getSalutationLabels()
    {
        return [
            0 => 'Select Title',
            1 => 'Mr. ',
            2 => 'Ms. ',
        ];
    }

    public function getEventLabels()
    {
        return [
            0 => 'Select Event',
            1 => 'ROBOKART',
            2 => 'BLIND CODINNG',
            3 => 'Math-Mania',
            4 => 'Eco-Topia',
            5 => 'CIRCUITRONICS',
            6 => 'SCIENTIA',
            7 => 'Code-Vita',
            8 => 'CONCEPT',
            9 => 'SEED YOUR STARTUP',
            10 => 'COVID-A-THON',
            11 => 'D & D',
            12 => 'SKETCH',
            13 => 'WEB WORLD',
            14 => 'COMIC CRUSADERS',
            15 => 'TECHIE DEB',
            16 => 'EX-QUIZ ME',
            17 => '5 MT',
            18 => 'FILMINA',
            19 => 'AERO ZONE',
            20 => 'AI Workshop',
            21 => 'DA VINCI CODE',
        ];
    }

    public function getStatusLabels()
    {
        return [
            self::STATUS_NOT_CONFIRMED => 'Not Confirmed',
            self::STATUS_COMFIRMED => 'Confirmed',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EventRegistrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EventRegistrationQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        $isInsert = $this->isNewRecord;
        if ($isInsert) {
            $this->image_id = Yii::$app->security->generateRandomString(8);
            $this->image_name = $this->image->name;
            $this->r_college = strtoupper($this->r_college);
        }
        if ($this->image) {
            $this->has_image = 1;
        }

        $saved = parent::save($runValidation, $attributeNames);
        if (!$saved) {
            return false;
        }
        if ($isInsert) {
            $imagePath = Yii::getAlias('@app/storage/events/' . $this->image_id . '.jpg');
            if (!is_dir(dirname($imagePath))) {
                FileHelper::createDirectory(dirname($imagePath));
            }
            $this->image->saveAs($imagePath);
            Image::getImagine()
                ->open($imagePath)
                ->thumbnail(new Box(1280, 1280))
                ->save();
        }

        return  true;
    }

    public function getImageLink()
    {
        return $this->has_image ?
            Yii::$app->params['frontendUrl'] . 'storage/events/' . $this->image_id . '.jpg'
            : '';
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $imagePath = Yii::$app->params['frontendUrl'] . 'storage/events/' . $this->image_id . '.jpg';
        unlink($imagePath);
    }

    public function isCreatedBy($userId)
    {
        return $this->createdBy->username;
    }
}
