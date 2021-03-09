<?php

use app\helpers\CheckImagePathHelper;
use app\models\AboutHome;
use app\models\CatalogGroup;
use app\models\ClientsSliderHome;
use app\models\Slider;
use app\models\ServicesHome;
use app\widgets\AboutHomeWidget;
use app\widgets\CatalogGroupWidget;
use app\widgets\ClientsSliderHomeWidget;
use app\widgets\CounterHomeWidget;
use app\widgets\PortfolioWidget;
use app\widgets\ServicesHomeWidget;
use app\widgets\SliderWidget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var AboutHome[] $about
 * @var CatalogGroup[] $catalogGroup
 * @var ClientsSliderHome $clients
 * @var ServicesHome[] $services
 * @var Slider[] $slider
 * @var String $imagePath
 */

?>


<!-- NOTE: SLIDER -->
<?= SliderWidget::widget(['slider' => $slider]); ?>
<!-- NOTE: end: SLIDER -->


<!-- NOTE: CATALOG -->
<section class="content background-grey">
    <div class="container">
    <div class="heading-text heading-section text-center">
        <h2>У нас можно заказать</h2>

        <span class="lead">Мы изготавливаем нашу продукцию на собственном производстве
            и имеем комплексный подход, который включает в себя: замеры, изготовление,
            расчет стоимости, монтаж и гарантийное обслуживание нашей продукции.
            <b>А размеры картинки должны быть 525x350 px</b></span>
    </div>
    <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
          <!-- Post item-->
          <?= CatalogGroupWidget::widget(['catalog' => $catalogGroup, 'imagePath' => $imagePath]); ?>
          <!-- end: Post item-->

          <?php $image = CheckImagePathHelper::CheckImagePath('group-all.jpg', $imagePath, "/catalog/"); ?>
          <div class="post-item border">
              <div class="post-item-wrap">
                  <div class="post-image">
                      <a href="<?= Url::to(['catalog/index']) ?> ">
                          <?= Html::img("@web/images/catalog/{$image}",
                              [
                                  'alt' => 'alt',
                              ]
                          ); ?>
                      </a>
                  </div>

                  <div class="post-item-description">
                      <h2>
                          <a href="<?= Url::to(['catalog/index']) ?> ">
                              Вся продукция
                          </a>
                      </h2>

                      <p>Наша мега пупер продукция</p>
                      <a href="<?= Url::to(['catalog/index']) ?> " class="item-link">
                          Подробнее...<i class="icon-chevron-right"></i>
                      </a>
                  </div>
              </div>
          </div>
    </div>
  </div>
</section>
<!-- NOTE: end: CATALOG -->


<!-- NOTE: SERVICES -->
<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Услуги</h2>
            <p>Услуги которые предоставляет наша компания</p>
        </div>

        <div class="row">
            <?= ServicesHomeWidget::widget(['services' => $services]); ?>
        </div>
    </div>
</section>
<!-- NOTE: end: SERVICES -->


<!-- NOTE: ABOUT -->
<section class="content background-grey">
  <div class="container">
      <div class="heading-text heading-section text-center">
          <h2>О нас</h2>
          <p>Познакомбтесь с нашим бунгало... Что то в этом роде надо</p>
      </div>

      <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item" data-stagger="10">
          <!-- NOTE: Post item-->
          <?= AboutHomeWidget::widget([
              'about' => $about,
              'imagePath' => $imagePath
          ]); ?>
          <!-- NOTE: end: Post item-->
      </div>

      <!-- NOTE: video -->
      <div class="row about-home__video" data-animate="fadeInUp">
          <div class="col-lg-12">
              <video class="img" controls="controls" poster="<?= $imagePath; ?>about-home/about-baner.jpg">
                  <source src="<?= $imagePath; ?>about-home/about.mp4" type='video/mp4'>
                  Тег video не поддерживается вашим браузером...
              </video>
          </div>
      </div>
      <!-- NOTE: end: video -->
  </div>
</section>
<!-- NOTE: end: ABOUT -->


<!-- NOTE: PORTFOLIO -->
<section class="p-b-0">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Выполненные работы</h2>
            <p>Часть интересных и трудных проектов, что мы реализовали (1280x960)</p>
        </div>
    </div>

    <div class="portfolio">

    <!-- NOTE: Portfolio Items -->
    <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

        <!-- NOTE: slider -->
        <?= PortfolioWidget::widget([
            'type' => 'slider',
            'classAdditional' => 'portfolio-home',
            'images' => [
                'portfolio-gallery_logovaya-1.jpg',
                'portfolio-gallery_logovaya-2.jpg',
                'portfolio-gallery_logovaya-3.jpg',
            ],
            'imagePath' => $imagePath,
            'link' => 'home/portfolio']); ?>

        <!-- NOTE: zoom -->
        <?= PortfolioWidget::widget([
            'classAdditional' => 'portfolio-home',
            'images' => ['portfolio-gallery_rul-1.jpg'],
            'imagePath' => $imagePath,
            'description' => [
                'test',
            ]]); ?>

        <!-- NOTE: zoom -->
        <?= PortfolioWidget::widget([
            'classAdditional' => 'portfolio-home',
            'images' => ['portfolio-gallery_trk-1.jpg'],
            'imagePath' => $imagePath,
            'description' => [
                'test',
            ]]); ?>

        <!-- NOTE: zoom -->
        <?= PortfolioWidget::widget([
            'classAdditional' => 'portfolio-home',
            'images' => ['portfolio-gallery_frizz-1.jpg'],
            'imagePath' => $imagePath,
            'description' => [
                'description Last Iceland Sunshine',
            ]]); ?>

        <!-- NOTE: zoom -->
        <?= PortfolioWidget::widget([
            'classAdditional' => 'portfolio-home',
            'images' => ['portfolio-gallery_lpak-1.jpg'],
            'imagePath' => $imagePath,
            'description' => [
                'description Last Iceland Sunshine',
            ]]); ?>

        <!-- NOTE: video -->
        <?= PortfolioWidget::widget([
            'type' => 'video',
            'classAdditional' => 'portfolio-home',
            'images' => ['portfolio-gallery_bel-2.jpg'],
            'imagePath' => $imagePath]); ?>

        <!-- NOTE: zoom -->
        <?= PortfolioWidget::widget([
            'images' => ['portfolio-gallery_friz-1.jpg'],
            'imagePath' => $imagePath,
            'classAdditional' => 'portfolio-home',
            'description' => [
                'sd123 Last Iceland Sunshine',
            ]]); ?>

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
    <!-- NOTE: end: Portfolio Items -->

  </div>
</section>
<!-- NOTE: end: PORTFOLIO -->


<!-- WHAT WE DO -->
<!--
<section class="background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2>WHAT WE DO</h2>
            <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="0">
                    <h4>Modern Design</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="200">
                    <h4>Loaded with Features</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="400">
                    <h4>Completely Customizable</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="600">
                    <h4>100% Responsive Layout</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="800">
                    <h4>Clean Modern Code</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInUp" data-animate-delay="1000">
                    <h4>Free Updates & Support</h4>
                    <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- END WHAT WE DO -->


<!-- NOTE: CONTACTS__PHONE -->
<section class="p-t-60 home-page__contact-focus background-grey">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Гарантия качества</h2>

            <span class="lead main-contact__info-block">
                Нашли дешевле?
                <br>
                Продадим еще дешевле!
                <br>
                <br>
                Вы можете приобрести нашу продукцию по гарантированно выгодной цене.
                <br>
                <br>
                <a href="tel:+74742565555"> +7 (4742) 56-55-55</a>
                <br>
                <br>
                с 9 до 18, без выходных
            </span>
        </div>
    </div>
</section>
<!-- NOTE: end: CONTACTS__PHONE -->


<!-- NOTE: COUNTERS -->
<section class="text-light p-t-150 p-b-150 " data-bg-parallax="images/counter-home/portfolio-counter.jpg">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">

            <?= CounterHomeWidget::widget([
                'icon' => ['fa-home', 'fa-phone', 'fa-university', 'fa-smile'],
                'speed' => [4000, 4500, 4500, 4550],
                'target' => [7318, 12416, 114, 14825],
                'title' => ['Установлено окон в домах', 'Обработано звонков', 'Застеклено объектов', 'Довольных клиентов'],
            ]); ?>

        </div>
    </div>
</section>
<!-- NOTE: end: COUNTERS -->


<!-- BLOG -->
<!--<section class="content background-grey">-->
<!--    <div class="container">-->
<!--        <div class="heading-text heading-section">-->
<!--            <h2>OUR BLOG</h2>-->
<!--            <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,-->
<!--                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id-->
<!--                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare-->
<!--                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span>-->
<!--        </div>-->
<!--        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">-->
<!--            -->
<!--            <div class="post-item border">-->
<!--                <div class="post-item-wrap">-->
<!--                    <div class="post-image">-->
<!--                        <a href="#">-->
<!--                            <img alt="" src="images/blog/12.jpg">-->
<!--                        </a>-->
<!--                        <span class="post-meta-category"><a href="">Lifestyle</a></span>-->
<!--                    </div>-->
<!--                    <div class="post-item-description">-->
<!--                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>-->
<!--                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33-->
<!--                                        Comments</a></span>-->
<!--                        <h2><a href="#">Standard post with a single image-->
<!--                            </a></h2>-->
<!--                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>-->
<!--                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!--            <div class="post-item border">-->
<!--                <div class="post-item-wrap">-->
<!--                    <div class="post-image">-->
<!--                        <a href="#">-->
<!--                            <img alt="" src="images/blog/17.jpg">-->
<!--                        </a>-->
<!--                        <span class="post-meta-category"><a href="">Science</a></span>-->
<!--                    </div>-->
<!--                    <div class="post-item-description">-->
<!--                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>-->
<!--                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33-->
<!--                                        Comments</a></span>-->
<!--                        <h2><a href="#">Standard post with a single image-->
<!--                            </a></h2>-->
<!--                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>-->
<!--                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!--            <div class="post-item border">-->
<!--                <div class="post-item-wrap">-->
<!--                    <div class="post-image">-->
<!--                        <a href="#">-->
<!--                            <img alt="" src="images/blog/18.jpg">-->
<!--                        </a>-->
<!--                        <span class="post-meta-category"><a href="">Science</a></span>-->
<!--                    </div>-->
<!--                    <div class="post-item-description">-->
<!--                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>-->
<!--                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33-->
<!--                                        Comments</a></span>-->
<!--                        <h2><a href="#">Standard post with a single image-->
<!--                            </a></h2>-->
<!--                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>-->
<!--                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            -->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- end: BLOG -->


<!-- NOTE: CLIENTS -->
<section class="p-t-60 p-b-80">
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Клиенты</h2>
            <span class="lead">Наши замечательные клиенты, с которыми мы работали!</span>
        </div>
        <?= ClientsSliderHomeWidget::widget(['clients' => $clients, 'imagePath' => $imagePath]); ?>
    </div>
</section>
<!-- NOTE: end: CLIENTS -->
