<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property int $active
 * @property string|null $title
 * @property string|null $mini_description
 * @property string|null $full_description
 * @property string $img
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['mini_description', 'full_description'], 'string'],
            [['title'], 'string', 'max' => 48],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'title' => 'Title',
            'mini_description' => 'Mini Description',
            'full_description' => 'Full Description',
            'img' => 'Img',
        ];
    }
}
