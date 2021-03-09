<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_subgroup".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string $img
 * @property string|null $class
 * @property string $link
 * @property int|null $active
 * @property int|null $group_id
 */
class CatalogSubgroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_subgroup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['link'], 'required'],
            [['active', 'group_id'], 'integer'],
            [['title'], 'string', 'max' => 48],
            [['img', 'class', 'link'], 'string', 'max' => 255],
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
            'class' => 'Class',
            'link' => 'Link',
            'active' => 'Active',
            'group_id' => 'Group ID',
        ];
    }
}
