<?php

use app\helpers\CheckImagePathHelper;
use app\widgets\PortfolioModelWidget;
use app\widgets\PortfolioWidget;

?>


<!-- Body Inner -->
<div class="body-inner">


    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative catalog__product-detail_banner" data-height-xs="360">

        <?php $image = CheckImagePathHelper::CheckImagePath('banner.jpg', $imagePath, "/portfolio/"); ?>
        <div class="slide kenburns"
             style="
               background: url(<?= \Yii::$app->request->BaseUrl . '/images/portfolio/'
               . $image; ?>) 50% 50% / cover no-repeat; ">

            <div class="bg-overlay"></div>

            <div class="container-wide">

                <!-- NOTE: Captions -->
                <div class="slide-captions">
                    <p class="lead">
                        <span class="text-rotator"
                              data-animation="fadeIn"
                              data-speed="4000"
                              data-separator="|">Пластиковые окна Rehau |
                            Делаем правильный монтаж в Липецке и области с гарантией 5 лет |
                            от 5 500 руб.
                        </span>
                    </p>
                </div>
                <!-- NOTE: end: Captions -->

            </div>
        </div>
    </div>
    

    <!-- Shop products -->
    <section>
        <div class="container">

            <div class="heading m-b-40">
                <h4>Featured products (banner image of height in 300px)</h4>
            </div>

            <!--Product list-->
            <div class="shop">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/10.jpg">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/6.jpg">
                                </a>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/3.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/7.jpg">
                                </a>
                                <span class="product-hot">HOT</span>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/4.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/9.jpg">
                                </a>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Cotton Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$22.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/5.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/11.jpg">
                                </a>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Grey Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/6.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Pocket Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/7.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/3.jpg">
                                </a>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Dark Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$26.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/8.jpg">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                                <span class="product-sale">SALE</span>
                                <span class="product-sale-off">50% Off</span>
                                <span class="product-wishlist">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Nature Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end: Shop products -->


    <!-- NOTE: WINDOW INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-bullhorn"></i></a>
                        </div>
                        <h3>Шумоизоляция</h3>
                        <p>Пластиковые окна Rehau имеют... бла бла бла</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thermometer-half"></i></a>
                        </div>
                        <h3>Теплоизоляция</h3>
                        <p>Окна Rehau... бла бла бла</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-handshake"></i></a>
                        </div>
                        <h3>Цена</h3>
                        <p>Мы такие то такие то, и можем продать по супер мега... бла бла бла...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NOTE: end: WINDOW INFO -->


    <!-- SHOP WIDGET PRODUTCS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading-text heading-line">
                        <h4>Top Rated</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/10.jpg">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/6.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/7.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading-text heading-line">
                        <h4>On Sale</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/11.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/9.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/3.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading-text heading-line">
                        <h4>Recommended</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/1.jpg">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/2.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/5.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading-text heading-line">
                        <h4>Popular</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/4.jpg">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/13.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="images/shop/products/8.jpg">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP WIDGET PRODUTCS -->


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
                        'link' => 'home/portfolio',
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
<!-- end: Body Inner -->

<?php
/**
 * для каждого типа товара будет свой класс реализации
 * те есть Рехао то будет product_Rehao
 *
 * фабрика и стратегия - паттерны
 *
 * таблица - продукты
 *
 * добавить в текущую таблица - поля
 * - инстанс_class
 * - продукт_data
 *
 *
 */
?>