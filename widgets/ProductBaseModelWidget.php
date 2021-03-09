<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * parent widget for catalogProductWidget and catalogGroupWidget
 *
 * @package app\widgets
 */
abstract class ProductBaseModelWidget extends Widget
{
    public $model;
    public $imagePath;
    public $imageCatalogPath;

    public function run()
    {
        return $this->render($this->getWidgetViewPath(), [
            'model' => $this->model,
            'imagePath' => $this->imagePath,
            'imageCatalogPath' => $this->imageCatalogPath
        ]);
    }

    abstract public function getWidgetViewPath();
}
