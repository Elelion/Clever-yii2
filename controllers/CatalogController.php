<?php

namespace app\controllers;

use app\models\CatalogDiscount;
use app\models\CatalogGroup;
use app\models\CatalogProduct;
use app\models\CatalogSubgroup;
use app\products\LumenWindowProduct;
use app\products\RehauWindowProduct;
use app\products\KbeWindowProduct;
use app\products\VekaWindowProduct;


/**
 * @note
 * actions for components on home(main) page
 */
class CatalogController extends AppController
{
    /**
     * @note
     * for output all products of the catalog
     */
    public function actionIndex()
    {
        $imagePath = $this->getImagePath();

        $this->setMeta('Продукция',
            'Пластиковые окна по низким ценам от производителя, 
                Rehau KBE Veka Lumen, пластиковые двери, балконы ПВХ',
            'пластиковые окна, купить окно, пластиковые окна цена, купить пластиковые окна, 
                окна монтаж, застеклить лоджию, окна на лоджию, балкон, настройка окон пвх'
        );

        $catalogGroup = CatalogGroup::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->all();

        $catalogProduct = CatalogProduct::find()
            ->orderBy('id')
            ->all();

        return $this->render('index', compact(
            'imagePath',
            'catalogGroup',
            'catalogProduct'
        ));
    }

    /**
     * @note
     * to view a sub-group of the current groups
     *
     * @param int $id
     * @return mixed
     */
    public function actionSubgroup(int $id)
    {
        $imagePath = $this->getImagePath();

        $catalogSubgroup = CatalogSubgroup::find()
            ->orderBy('id')
            ->where(['group_id' => $id])
            ->all();

        return $this->render('catalog-subgroup', compact(
            'imagePath',
            'catalogSubgroup'
        ));
    }

    /**
     * @note
     * to view all discounts from the catalog page
     */
    public function actionDiscount()
    {
        $imagePath = $this->getImagePath();

        $this->setMeta('Лови момент',
            'Акции, скидки',
            'пластиковые окна по акции, купить окно со скидкой, окна монтаж скидка, 
                застеклить лоджию со скидкой, окна на лоджию со скидкой, балкон акции'
        );

        $catalogDiscount = CatalogDiscount::find()
            ->where(['active' => true])
            ->orderBy('id')
            ->all();

        return $this->render('discount', compact(
            'imagePath',
            'catalogDiscount'
        ));
    }

    public function actionDiscountDetail($id)
    {
        $imagePath = $this->getImagePath();

        $this->setMeta('Лови момент',
            'Акции, скидки',
            'пластиковые окна по акции, купить окно со скидкой, окна монтаж скидка, 
                застеклить лоджию со скидкой, окна на лоджию со скидкой, балкон акции'
        );

        $catalogDiscount = CatalogDiscount::find()
            ->where(['active' => true])
            ->andWhere(['id' => $id])
            ->orderBy('id')
            ->one();

        return $this->render('discount-detail', compact(
            'imagePath',
            'catalogDiscount'
        ));
    }

    public function actionProductDetail(int $id)
    {
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

//         $product =

        return $this->render('product-detail', compact(
            'imagePath',
            'portfolioList'
        ));
    }

    /**
     * @note
     * for output a Lumen production
     *
     * @return string
     */
    public function actionProductWindowLumen()
    {
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

        $productList = CatalogProduct::find()
            ->where(['implementation_class' => LumenWindowProduct::class])
            ->all();

        return $this->render('product-window-lumen', compact(
            'imagePath',
            'portfolioList',
            'productList'
        ));
    }

    /**
     * @note
     * for output a Rehau production
     *
     * @return string
     */
    public function actionProductWindowRehau()
    {
        /**
         * @note
         * look in AppController
         *
         * @var string $imagePath
         */
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

        $productList = CatalogProduct::find()
            ->where(['implementation_class' => RehauWindowProduct::class])
            ->all();

        return $this->render('product-window-rehau', compact(
            'imagePath',
            'portfolioList',
            'productList'
        ));
    }

    /**
     * @note
     * for output a KBE production
     *
     * @return string
     */
    public function actionProductWindowKbe()
    {
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

        $productList = CatalogProduct::find()
            ->where(['implementation_class' => KbeWindowProduct::class])
            ->all();

        return $this->render('product-window-kbe', compact(
            'imagePath',
            'portfolioList',
            'productList'
        ));
    }

    /**
     * @note
     * for output a VEKA production
     *
     * @return string
     */
    public function actionProductWindowVeka()
    {
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

        $productList = CatalogProduct::find()
            ->where(['implementation_class' => VekaWindowProduct::class])
            ->all();

        return $this->render('product-window-veka', compact(
            'imagePath',
            'portfolioList',
            'productList'
        ));
    }

    /**
     * @note
     * for output a VEKA production
     *
     * @return string
     */
    public function actionProductWindowPanoramic()
    {
        $imagePath = $this->getImagePath();
        $portfolioList = $this->getPortfolioQuery();

        $productList = CatalogProduct::find()
            ->where(['implementation_class' => 'PanoramicWindowProduct'])
            ->all();

        return $this->render('product-window-panoramic', compact(
            'imagePath',
            'portfolioList',
            'productList'
        ));
    }

    /**
     * @note
     * for saving Rehau production into the db
     * localhost:8888/Clever-yii2/web/catalog/save-product-window
     */
    public function actionSaveProductWindow()
    {
        /*
        $rehauWindowProduct = new RehauWindowProduct();
        $rehauWindowProduct->sashWidth = '160 мм';
        $rehauWindowProduct->windowWidth = '132 мм';
        $rehauWindowProduct->airChambers = '13 мм';
        $rehauWindowProduct->heatResistance = '0,64 м2 С/Вт';
        */

        $lumenWindowProduct = new LumenWindowProduct();
        $lumenWindowProduct->systemWidth = '260 мм';
        $lumenWindowProduct->cameraNumbers = '2 мм';
        $lumenWindowProduct->heatResistance = '1,64 м2 С/Вт';
        $lumenWindowProduct->doubleGlazedWindows = '2';
        $lumenWindowProduct->suitableForGlazing = 'да';
        $lumenWindowProduct->production = 'Россия';
        $lumenWindowProduct->productionTime = '1 мес';

        $model = new CatalogProduct();
        $model->title = 'Lumen blitz';
        $model->class = '';
        $model->implementation_class = LumenWindowProduct::class;
        $model->active = 1;
        $model->group_id = 1;
        $model->description = $lumenWindowProduct;
        $model->save();
    }
}
