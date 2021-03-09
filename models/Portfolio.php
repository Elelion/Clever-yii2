<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string|null $type_portfolio
 * @property string|null $class
 * @property string $description
 *
 * @property PortfolioImage[] $portfolioImages
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string'],
            [['type_portfolio'], 'string', 'max' => 16],
            [['class'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_portfolio' => 'Type Portfolio',
            'class' => 'Class',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[PortfolioImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPortfolioImages()
    {
        return $this->hasMany(PortfolioImage::class, ['portfolio_id' => 'id']);
    }
}
