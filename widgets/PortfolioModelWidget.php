<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the portfolio(s) on main page
 *
 * @package app\widgets
 */
class PortfolioModelWidget extends Widget
{
    public $model;
    public $imagePath;

    public function run()
    {
        return $this->render('portfolioModel', [
            'model' => $this->model,
            'imagePath' => $this->imagePath
        ]);

    }
}
