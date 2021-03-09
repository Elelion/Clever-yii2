<?php

/**
 * @todo
 * check the implementation for all current product
 */

use app\helpers\CheckImagePathHelper;
use app\models\CatalogProduct;
use yii\helpers\Html;


/**
 * @note
 * using for image url, see below
 *
 * Yii::$app->request->hostInfo - return is -> http://localhost:8888
 * Yii::$app->request->getBaseUrl(true) - return is -> Clever/web
 *
 * @var string
 */
$imageUrl = Yii::$app->request->hostInfo . Yii::$app->request->getBaseUrl(true);

/**
 * @var string $imagePath
 * @var string $imageCatalogPath
 * @var CatalogProduct $product
 */

?>


<?php foreach ($model as $product): ?>

    <?php $productsProperties = $product->getInstance(); ?>

    <?php $image = CheckImagePathHelper::CheckImagePath(
        $product->img, $imagePath, $imageCatalogPath); ?>

    <div class="col-lg-4">
        <div class="product">
            <div class="product-description">
                <h3 class="product__title"><?= $product->title; ?></h3>
                <div class="product-category"><?= $product->getGroupProduct(); ?></div>
            </div>

            <div class="product-image">
                <a href="#">
                    <?= Html::img("@web/images{$imageCatalogPath}{$image}",
                        [
                            'alt' => 'Картинка',
                        ]
                    ); ?>
                </a>
                <a href="#">
                    <?= Html::img("@web/images{$imageCatalogPath}" .
                        stristr($image, '.', true) . '-1.jpg',
                        [
                            'alt' => 'Картинка',
                        ]
                    ); ?>
                </a>

                <div class="product-overlay">
                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Купить</a>
                </div>
            </div>

            <div class="product-description">
                <ul>
                    <li>
                        <div class="description__name">ширина системы</div>
                        <div class="description__value"><?= $productsProperties->systemWidth; ?></div>
                    </li>
                    <li>
                        <div class="description__name">кол-во камер</div>
                        <div class="description__value"><?= $productsProperties->cameraNumbers; ?></div>
                    </li>
                    <li>
                        <div class="description__name">теплосопротивление</div>
                        <div class="description__value"><?= $productsProperties->heatResistance; ?></div>
                    </li>
                    <li>
                        <div class="description__name">стеклопакет</div>
                        <div class="description__value"><?= $productsProperties->doubleGlazedWindows; ?></div>
                    </li>
                    <li>
                        <div class="description__name">подходит для остекления</div>
                        <div class="description__value"><?= $productsProperties->suitableForGlazing; ?></div>
                    </li>
                    <li>
                        <div class="description__name">производство</div>
                        <div class="description__value"><?= $productsProperties->production; ?></div>
                    </li>
                    <li>
                        <div class="description__name">срок изготовления</div>
                        <div class="description__value"><?= $productsProperties->productionTime; ?></div>
                    </li>
                </ul>
            </div>

            <div class="product-description">
                <div class="product-price"><ins>от <?= $product->price; ?> ₽/м2</ins></div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
