<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var string $class
 * @var string $images
 * @var array $description
 */

?>


<div class="portfolio-item img-zoom <?= $class; ?>">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="<?= Url::to('home/portfolio-zoom'); ?>" >
                <?php $image = CheckImagePathHelper::CheckImagePath($images[0], $imagePath, "/portfolio/"); ?>
                <?= Html::img("@web/images/portfolio/{$image}",
                    [
                        'alt' => '',
                    ]
                ); ?>
            </a>
        </div>

        <div class="portfolio-description">
            <a title="<?= $description[0]; ?>"
               data-lightbox="image"
               href="<?= \Yii::$app->request->BaseUrl . '/'. $imagePath; ?>portfolio/<?= $image; ?>">
                  <i class="icon-maximize"></i>
            </a>
        </div>
    </div>
</div>
