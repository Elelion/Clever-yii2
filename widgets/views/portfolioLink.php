<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $class
 * @var string $link
 * @var string $images
 * @var array $description
 */

?>


<div class="portfolio-item img-zoom <?= $class; ?>">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="<?= Url::to($link); ?>" >
                <?php $image = CheckImagePathHelper::CheckImagePath($images[0], $imagePath, "/portfolio/"); ?>
                <?= Html::img("@web/images/portfolio/{$image}",
                    [
                        'alt' => '',
                    ]
                ); ?>
            </a>
        </div>

        <div class="portfolio-description">
            <a href="<?= Url::to($link); ?>" >
               <h3><?= $description[0]; ?></h3>
               <span><?= $description[1]; ?></span>
            </a>
        </div>
    </div>
</div>
