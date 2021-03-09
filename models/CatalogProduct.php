<?php

namespace app\models;


/**
 * This is the model class for table "catalog_product".
 *
 * @property int $id
 * @property string|null $alert
 * @property string|null $title
 * @property string|null $description
 * @property string|null $price
 * @property string $img
 * @property string $class
 * @property string $implementation_class
 * @property int $active
 * @property int $group_id
 */
class CatalogProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'class'], 'safe'],
            [['title', 'active'], 'required'],
            [['active', 'group_id'], 'integer'],
            [['alert'], 'string', 'max' => 16],
            [['title'], 'string', 'max' => 48],
            [['img', 'class', 'implementation_class'], 'string', 'max' => 255],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alert' => 'Alert',
            'title' => 'Title',
            'description' => 'Description',
            'img' => 'Img',
            'class' => 'Class',
            'implementation_class' => 'Implementation class',
            'active' => 'Active',
            'group_id' => 'Group ID',
            'price' => 'Price',
        ];
    }

    /**
     * @note
     * for return title for current group of the product
     *
     * @return mixed
     */
    public function getGroupProduct()
    {
        /**
         * @note
         * $groupTitle - to store the group name
         *
         * @var CatalogGroup $groupTitle
         */
        $groupTitle = CatalogGroup::find()
            ->where(['id_group' => $this->group_id])
            ->one();

        return $groupTitle->title;
    }

    public function getInstance()
    {
        if (!class_exists($this->implementation_class)) {
            throw new \Exception('Класс не существует: ', $this->implementation_class);
        }

        /**
         * @note
         * return a new instance of the class whose name is in the property
         * array - casting types
         *
         * implementation_class - stores the path and name of the class that is
         * described in the controller
         */
        return new $this->implementation_class(unserialize($this->description));
    }
}
