<?php

use app\assets\CatalogAsset;
use app\helpers\CheckImagePathHelper;
use app\models\CatalogGroup;
use app\models\CatalogProduct;
use app\widgets\CatalogGroupWidget;
use app\widgets\CatalogProductWidget;
use yii\helpers\Html;
use yii\helpers\Url;

CatalogAsset::register($this);

/**
 * @var CatalogGroup[] $catalogGroup
 * @var CatalogProduct[] $catalogProduct
 * @var String $imagePath
 */

?>


<section class="content">
    <div class="container">
        <div class="col-lg-12 p-t-20">
            <div class="heading-text heading-section">
                <h2>Продукция</h2>
            </div>
        </div>

        <!-- NOTE: Portfolio Filter -->
        <nav class="grid-filter gf-outline catalog-main__menu" data-layout="#portfolio">
            <ul>
                <!--
                 NOTE:
                 use - {data-category} parameter for sorting
                 if you will display the all products, use - {data-category="*"}
                -->
                <li class="active catalog-main__menu-active">
                    <a
                        href="#"
                        id="catalogActiveGroup"
                        data-category=".ct-group"
                    >
                        Группы
                    </a>
                </li>
                <li><a href="#" data-category=".ct-sell">Акции</a></li>
                <li><a href="#" data-category=".ct-new">Новинки</a></li>
                <li><a href="#" data-category=".ct-gate">Готовые изделия</a></li>
            </ul>

            <div class="grid-active-title">Группы</div>
        </nav>
        <!-- NOTE: end: Portfolio Filter -->

        <?php
        /**
         * @note
         * catalog-main__blog - for use in JS,
         * look in ChangeHeightOfClass in JS folder.
         * this js include only for this page in assets - CatalogAssets
         */
        ?>
        <div id="blog" class="grid-layout post-3-columns m-b-30 catalog-main__blog" data-item="post-item">
            <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

                <!-- NOTE: for discount block -->
                <?php $image = CheckImagePathHelper::CheckImagePath('sell-banner.jpg', $imagePath, "/catalog/"); ?>

                <div class="post-item border portfolio-item no-overlay ct-group ct-sell">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="<?= Url::to(['catalog/discount']); ?> ">
                                <?= Html::img("@web/images/catalog/{$image}",
                                    [
                                        'alt' => 'Акции и предложения',
                                    ]
                                ); ?>
                            </a>
                        </div>

                        <div class="post-item-description">
                            <h2>
                                <a href="<?= Url::to(['catalog/discount']); ?> ">
                                    Акции и предложения
                                </a>
                            </h2>
                            <p>Лови момент и не упускай свой шанс с экономить</p>
                            <a href="<?= Url::to(['catalog/discount']); ?>" class="item-link">
                                Подробнее...<i class="icon-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- NOTE: end: for discount block -->

                <!-- NOTE: call group/catalog of the products -->
                <?= CatalogGroupWidget::widget(['catalog' => $catalogGroup, 'imagePath' => $imagePath]); ?>

                <!-- NOTE: call of the all products -->
                <?= CatalogProductWidget::widget(['catalog' => $catalogProduct, 'imagePath' => $imagePath]); ?>

            </div>
        </div>
    </div>
</section>
