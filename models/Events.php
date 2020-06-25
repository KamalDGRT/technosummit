<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%events}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property int|null $status
 * @property string|null $description
 * @property int $created_at
 */
class Events extends \yii\db\ActiveRecord
{
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
            [['name', 'image', 'description'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'status' => 'Status',
            'description' => 'Description',
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
}
