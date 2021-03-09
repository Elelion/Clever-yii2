<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the portfolio(s) on main page
 *
 * @package app\widgets
 */
class PortfolioWidget extends Widget
{
    public $type;
    public $classAdditional;
    public $images = [];
    public $imagePath;
    public $description = [];
    public $link;

    public function run()
    {
        /**
         * @note
         * accepts 4 parameters
         *
         * slider,
         * picture,
         * link,
         * video
         */
        switch ($this->type) {
            case 'slider':
                return $this->render('portfolioSlider', [
                    'class' => $this->classAdditional,
                    'images' => $this->images,
                    'imagePath' => $this->imagePath,
                    'link' => $this->link,
                ]);
                break;

            case 'video':
                return $this->render('portfolioVideo', [
                    'class' => $this->classAdditional,
                    'images' => $this->images,
                    'imagePath' => $this->imagePath,
                ]);
                break;

            case 'link':
                return $this->render('portfolioLink', [
                    'class' => $this->classAdditional,
                    'images' => $this->images,
                    'imagePath' => $this->imagePath,
                    'description' => $this->description,
                    'link' => $this->link,
                ]);
                break;

            case 'gallery':
                return $this->render('portfolioGallery', [
                    'class' => $this->classAdditional,
                    'images' => $this->images,
                    'imagePath' => $this->imagePath,
                    'description' => $this->description,
                ]);
                break;

            default:
                return $this->render('portfolioZoom', [
                    'class' => $this->classAdditional,
                    'images' => $this->images,
                    'imagePath' => $this->imagePath,
                    'description' => $this->description,
                ]);
                break;
        }
    }
}
