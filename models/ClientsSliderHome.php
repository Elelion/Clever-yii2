<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients_slider_home".
 *
 * @property int $id
 * @property int $active
 * @property string|null $title
 * @property string|null $alt
 * @property string $img
 */
class ClientsSliderHome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients_slider_home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['title', 'alt'], 'string', 'max' => 96],
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
            'alt' => 'Alt',
            'img' => 'Img',
        ];
    }
}
