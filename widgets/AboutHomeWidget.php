<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the about on main page
 *
 * @package app\widgets
 */
class AboutHomeWidget extends Widget
{
    public $about;
    public $imagePath;

    public function run()
    {
        return $this->render('aboutHome', [
            'aboutHome' => $this->about,
            'imagePath' => $this->imagePath,
        ]);
    }
}