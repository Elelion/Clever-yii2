<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the services(s) on main page
 *
 * @package app\widgets
 */
class ServicesHomeWidget extends Widget
{
    public $services;

    public function run()
    {
        return $this->render('servicesHome', [
            'services' => $this->services,
        ]);
    }
}