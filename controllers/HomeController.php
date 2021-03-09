<?php

namespace app\controllers;

use app\models\AboutHome;
use app\models\CatalogGroup;
use app\models\CatalogProduct;
use app\models\ClientsSliderHome;
use app\models\Portfolio;
use app\models\PortfolioImage;
use app\models\ServicesHome;
use app\models\Slider;
use app\widgets\PortfolioModelWidget;
use yii\web\NotFoundHttpException;


/**
 * @note
 * actions for components on home(main) page
 */
class HomeController extends AppController
{
    /**
     * @note
     * for output data for main page
     */
    public function actionIndex()
    {
        $imagePath = $this->getImagePath();

        $this->setMeta('Купить пластиковые окна в Липецке по низким ценам 
                от производителя',
            'Пластиковые окна, купить по акции со скидкой, пластиковые 
                окна и оконные системы Rehau KBE Veka Lumen, пластиковые двери, 
                балконы ПВХ под ключ. Фасадное остекление алюминиевыми системами.',
            'пластиковые окна, купить окна, окна цена, застеклить лоджию, 
                остекление под ключ, заказать пластиковые окна, окно пвх цена, 
                остекление балконов'
        );

        $slider = Slider::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->all();

        $catalogGroup = CatalogGroup::find()
            ->orderBy('RAND()')
            ->limit(5)
            ->all();

        $services = ServicesHome::find()
            ->orderBy('id')
            ->all();

        $about = AboutHome::find()
            ->orderBy('id')
            ->all();

        $clients = ClientsSliderHome::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->all();


        return $this->render('index', compact(
            'slider',
            'imagePath',
            'catalogGroup',
            'services',
            'about',
            'clients'
        ));
    }

    /**
     * @note
     * to view the selected slider pages
     */
    public function actionSlider(int $id)
    {
        $slider = Slider::findOne($id);

        if (empty($slider)) {
            throw new NotFoundHttpException('Запрашиваемого слайда не найдено...');
        }

        $this->setMeta("{$slider->title}. " . \Yii::$app->name,
            $slider->title,
            $slider->mini_description
        );

        return $this->render('slider', compact(
            'slider'
        ));
    }

    /**
     * @note
     * to view the all articles of about chapter
     */
    public function actionAbout(int $id)
    {
        $imagePath = $this->getImagePath();

        $about = AboutHome::findOne($id);

        return $this->render('about', compact(
            'imagePath',
            'about'
        ));
    }

    /**
     * @note
     * view of completed works of the company
     */
    public function actionPortfolio()
    {
        $imagePath = $this->getImagePath();

        $portfolioList = Portfolio::find()
            ->all();

        return $this->render('portfolio', compact(
            'imagePath',
            'portfolioList'
        ));
    }

    /**
     * @note
     * to view the contacts of the company
     */
    public function actionContact()
    {
        $imagePath = $this->getImagePath();

        return $this->render('contact', compact(
            'imagePath'
        ));
    }
}