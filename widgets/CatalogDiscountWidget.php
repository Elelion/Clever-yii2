<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the catalog(s) on discount page
 *
 * @package app\widgets
 */
class CatalogDiscountWidget extends Widget
{
    public $catalog;
    public $imagePath;

    public function run()
    {
        return $this->render('catalogDiscount', [
            'catalogDiscountList' => $this->catalog,
            'imagePath' => $this->imagePath,
        ]);
    }
}