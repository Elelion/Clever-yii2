<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_discount".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $full_description
 * @property string $deadline
 * @property string $img
 * @property int|null $active
 */
class CatalogDiscount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_discount';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['active'], 'integer'],
            [['title'], 'string', 'max' => 48],
            [['img'], 'string', 'max' => 255],
            [['deadline'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'img' => 'Img',
            'active' => 'Active',
        ];
    }
}
