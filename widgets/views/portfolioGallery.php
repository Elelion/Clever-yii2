<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;

/**
 * @var array $description;
 * @var string $images;
 * @var string $imagePath;
 */

?>


<div class="portfolio-item img-zoom <?= $class; ?>">
    <div class="portfolio-item-wrap">
        <div class="portfolio-image">
            <a href="#">
                <?php $posterImage = CheckImagePathHelper::CheckImagePath($images[0], $imagePath, "/portfolio/"); ?>
                <?= Html::img("@web/images/portfolio/{$posterImage}",
                    [
                        'alt' => '',
                    ]
                ); ?>
            </a>
        </div>

        <div class="portfolio-description" data-lightbox="gallery">
            <?php for($i = 0; $i < count($images); $i++): ?>
                <?php $image = CheckImagePathHelper::CheckImagePath($images[$i], $imagePath, "/portfolio/"); ?>

                <a title="<?= $description[$i]; ?>"
                   data-lightbox="gallery-image"
                   href="/Clever/web/images/portfolio/<?= $image; ?>"
                >
                    <i class="<?= ($i < 1) ? 'fa fa-clone' : 'hidden'; ?>"></i>
                </a>
            <?php endfor; ?>
        </div>
    </div>
</div>