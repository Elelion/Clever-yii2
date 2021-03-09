<?php

namespace app\widgets;

use app\models\AboutHome;
use yii\base\Widget;


/**
 * @note
 * widget for output of the ...
 *
 * @package app\widgets
 */
class AboutImagesWidget extends Widget
{
    /**
     * @var AboutHome
     */
    public $model;
    public $imagePath;

    public function run()
    {
        switch ($this->model->chapter_id) {
            case AboutHome::ABOUT_COMPANY_HISTORY:
                return $this->render('aboutImagesHistory', [
                    'imagePath' => $this->imagePath,
                ]);

                break;

            case AboutHome::ABOUT_COMPANY_OFFICE:
                return $this->render('aboutImagesOffice', [
                    'imagePath' => $this->imagePath,
                ]);

                break;

            case AboutHome::ABOUT_COMPANY_FACTORY:
                return $this->render('aboutImagesFactory', [
                    'imagePath' => $this->imagePath,
                ]);

                break;

            case AboutHome::ABOUT_COMPANY_CERTIFICATE:
                return $this->render('aboutImagesCertificate', [
                    'imagePath' => $this->imagePath,
                ]);

                break;
        }
    }
}