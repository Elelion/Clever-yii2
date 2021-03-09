<?php

use app\assets\PortfolioAsset;
use app\helpers\CheckImagePathHelper;
use app\models\Portfolio;
use app\widgets\PortfolioModelWidget;

PortfolioAsset::register($this);

/**
 * @var Portfolio $portfolioList
 * @var String $imagePath
 */

?>


<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

  <?php $image = CheckImagePathHelper::CheckImagePath('banner.jpg', $imagePath, "/portfolio/"); ?>
  <div class="slide kenburns"
       style="
          background:url(<?= \Yii::$app->request->BaseUrl . '/images/portfolio/'
          . $image; ?>) 50% 50% / cover no-repeat;">

      <div class="bg-overlay"></div>

      <div class="container-wide">
          <!-- NOTE: Captions -->
          <div class="slide-captions">
              <p class="lead">
                  <span class="text-rotator"
                        data-animation="fadeIn"
                        data-speed="4000"
                        data-separator="|">Hello there. Nice to see you, finally. |
                      I am John Smith, proffessional Photographer |
                      I’m here to capture the beauty of the moment |
                      Hope you like my work and Take a look around |
                      And let me know if you need me :)
                  </span>
              </p>
          </div>
          <!-- NOTE: end: Captions -->
      </div>


      <div class="container-wide portfolio__control-panel">
          <!-- NOTE: Portfolio Filter -->
          <nav class="grid-filter gf-outline" data-layout="#portfolio" style="">
              <ul>
                  <li class="active"><a href="#" data-category="*">Все</a></li>
                  <li><a href="#" data-category=".ct-new">Новые</a></li>
                  <li><a href="#" data-category=".ct-complex">Комплексные</a></li>
                  <li><a href="#" data-category=".ct-business">Бизнесс</a></li>
                  <li><a href="#" data-category=".ct-private">Частные</a></li>
              </ul>
          </nav>
          <!-- NOTE: end: Portfolio Filter -->
      </div>
  </div>
</div>


<!-- GALLERY -->
<section id="section-gallery" class="no-padding" style="background-color:#454A43;">
    <div id="portfolio" class="grid-layout portfolio-4-columns portfolio__filter" data-margin="0">
        <?= PortfolioModelWidget::widget(['model' => $portfolioList, 'imagePath' => $imagePath]); ?>
    </div>
</section>
<!-- NOTE: end: GALLERY -->
