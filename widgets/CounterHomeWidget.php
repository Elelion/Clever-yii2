<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the counter(s) on main page
 *
 * @package app\widgets
 */
class CounterHomeWidget extends Widget
{
    public $icon = [];
    public $speed = [];
    public $target = [];
    public $title = [];

    public function run()
    {
        return $this->render('counterHome', [
            'iconList' => $this->icon,
            'speedList' => $this->speed,
            'targetList' => $this->target,
            'titleList' => $this->title,
        ]);
    }
}