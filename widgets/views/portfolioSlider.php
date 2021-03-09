<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $class
 * @var string $link
 * @var string $images
 * @var string $imagePath
 */

?>


<div class="portfolio-item <?= $class; ?>">
    <div class="portfolio-item-wrap">
        <div class="portfolio-slider">
            <div class="carousel dots-inside dots-dark arrows-dark"
                 data-items="1"
                 data-loop="true"
                 data-autoplay="true"
                 data-animate-in="fadeIn"
                 data-animate-out="fadeOut"
                 data-autoplay="1500"
            >
                <?php foreach ($images as $img): ?>
                    <?php $image = CheckImagePathHelper::CheckImagePath($img, $imagePath, "/portfolio/"); ?>

                    <a href="<?= Url::to($link); ?>" >
                        <?= Html::img("@web/images/portfolio/{$image}",
                            [
                                'alt' => '',
                            ]
                        ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
