<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_group".
 *
 * @property int $id
 * @property int $id_group
 * @property string|null $title
 * @property string|null $description
 * @property string $img
 * @property int|null $active
 */
class CatalogGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_group', 'active'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 48],
            [['img', 'class'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_group' => 'Id Group',
            'title' => 'Title',
            'description' => 'Description',
            'active' => 'Active',
        ];
    }
}
