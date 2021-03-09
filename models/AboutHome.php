<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_home".
 *
 * @property int $id
 * @property int $chapter_id
 * @property string|null $title
 * @property string|null $mini_description
 * @property string|null $full_description
 * @property string|null $img
 */


class AboutHome extends \yii\db\ActiveRecord
{
    const ABOUT_COMPANY_HISTORY = 1;
    const ABOUT_COMPANY_OFFICE = 2;
    const ABOUT_COMPANY_FACTORY = 3;
    const ABOUT_COMPANY_CERTIFICATE = 4;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_home';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mini_description', 'full_description'], 'string'],
            [['title'], 'string', 'max' => 64],
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
            'chapter_id' => 'ID',
            'title' => 'Title',
            'mini_description' => 'Mini Description',
            'full_description' => 'Full Description',
            'img' => 'Img',
        ];
    }

    public function getImageName($path, $chapterPath)
    {
        $imageName = ($this->img == null) ? 'none.jpg' : $this->img;
        $image = (file_exists($path . $chapterPath . "{$imageName}")) ? $imageName : 'none.jpg';

        return $image;
    }
}
