<?php

use app\helpers\CheckImagePathHelper;
use app\models\CatalogProduct;
use app\models\PortfolioImage;
use app\products\RehauWindowProduct;
use app\widgets\PortfolioModelWidget;
use app\widgets\PortfolioWidget;
use app\widgets\ProductWindowModelWidget;
use yii\helpers\Html;

/**
 * @var String $imagePath
 * @var CatalogProduct[] $productList
 * @var CatalogProduct[] $product
 * @var RehauWindowProduct $productsProperties
 * @var PortfolioImage $portfolioList
 */

?>


<div class="body-inner">
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative catalog__product-detail_banner" data-height-xs="360">

        <?php $image = CheckImagePathHelper::CheckImagePath('Three-Swans.jpg', $imagePath, "/slider/"); ?>

        <div class="slide kenburns"
             style="
               background: url(<?= \Yii::$app->request->BaseUrl . '/images/slider/'
             . $image; ?>) 50% 50% / cover no-repeat; ">

            <div class="bg-overlay"></div>

            <div class="container-wide">

                <!-- NOTE: Captions -->
                <div class="slide-captions">
                    <p class="lead">
                        <span class="text-rotator"
                              data-animation="fadeIn"
                              data-speed="4000"
                              data-separator="|">Пластиковые окна Lumen |
                            Делаем мега пупер окна и что то там еще... |
                            Гарантия производителя |
                            от 5 500 руб.
                        </span>
                    </p>
                </div>
                <!-- NOTE: end: Captions -->

            </div>
        </div>
    </div>


    <section>
        <div class="container">

            <div class="heading m-b-40">
                <h4>Панорамные окна (banner image of height in 300px)</h4>
            </div>

            <div class="shop">
                <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">

                    <?php foreach ($productList as $product): ?>

                        <?php $image = CheckImagePathHelper::CheckImagePath(
                            $product->img, $imagePath, '/catalog/window-panoramic/'); ?>

                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <?= Html::img("@web/images/catalog/window-panoramic/{$image}",
                                            [
                                                'alt' => '',
                                                'style' => 'width: 543px; height: 362px;'
                                            ]
                                        ); ?>
                                    </a>

                                    <div class="post-item-description">
                                        <h2><a href="#">Standard post with a single image </a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- NOTE: WINDOW INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                           <a href="#"><i class="fa fa-bullhorn"></i></a>
                        </div>
                        <h3>Что то еще...</h3>
                        <p>бла бла бла</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                           <a href="#"><i class="fa fa-thermometer-half"></i></a>
                        </div>
                        <h3>Что то второе...</h3>
                        <p>бла бла бла</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                           <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <h3>Что то третье...</h3>
                        <p>бла бла бла...</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <h3>Рассказать про свой завод...</h3>
                        <p>бла бла бла...</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <h3>Рассказать про надежность...</h3>
                        <p>бла бла бла...</p>
                    </div>
                </div>

                <div class="col-lg-4">
                      <div class="icon-box effect small clean">
                        <div class="icon">
                           <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <h3>Придумать бонус...</h3>
                        <p>бла бла бла...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NOTE: end: WINDOW INFO -->


    <!-- NOTE: PORTFOLIO -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-text heading-line text-center">
                       <h4>Выполненные работы</h4>
                    </div>

                </div>
            </div>

            <div class="shop-category">
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <?= PortfolioModelWidget::widget(['model' => $portfolioList, 'imagePath' => $imagePath]); ?>

                    <!-- NOTE: link -->
                    <?= PortfolioWidget::widget([
                        'type' => 'link',
                        'classAdditional' => 'portfolio-home',
                        'images' => ['portfolio-gallery_bel-1.jpg'],
                        'imagePath' => $imagePath,
                        'link' => ['home/portfolio'],
                        'description' => [
                            'Галлерея',
                            'Посмотреть все работы',
                        ]]); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- NOTE: end: PORTFOLIO -->

</div>
