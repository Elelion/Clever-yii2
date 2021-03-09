<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the clients(s) on main page
 *
 * @package app\widgets
 */
class ClientsSliderHomeWidget extends Widget
{
    public $clients;
    public $imagePath;

    public function run()
    {
        return $this->render('clientsSliderHome', [
            'clientsList' => $this->clients,
            'imagePath' => $this->imagePath,
        ]);
    }
}