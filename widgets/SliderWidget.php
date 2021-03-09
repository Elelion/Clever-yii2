<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the slider(s) on main page
 *
 * @package app\widgets
 */
class SliderWidget extends Widget
{
    public $slider;

    public function run()
    {
        return $this->render('slider', [
            'slider' => $this->slider,
        ]);
    }
}
