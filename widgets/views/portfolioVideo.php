<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $class
 * @var string $images
 * @var string $imagePath
 */

?>


<div class="portfolio-item img-zoom <?= $class; ?>">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="<?= Url::to('#'); ?>" >
                <?php $image = CheckImagePathHelper::CheckImagePath($images[0], $imagePath, "/portfolio/"); ?>
                <?= Html::img("@web/images/portfolio/{$image}",
                    [
                        'alt' => '',
                    ]
                ); ?>
            </a>
        </div>

        <div class="portfolio-description">
            <a title="Paper Pouch!"
                data-lightbox="iframe"
                href="<?= Url::to('https://www.youtube.com/watch?v=k6Kly58LYzY'); ?>"><i class="icon-play"></i>
            </a>
        </div>
    </div>
</div>
