<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * parent widget for catalogProductWidget and catalogGroupWidget
 *
 * @package app\widgets
 */
abstract class CatalogBaseWidget extends Widget
{
    public $catalog;
    public $imagePath;

    public function run()
    {
        return $this->render($this->getWidgetViewPath(), [
            'catalogList' => $this->catalog,
            'imagePath' => $this->imagePath,
        ]);
    }

    abstract public function getWidgetViewPath();
}
