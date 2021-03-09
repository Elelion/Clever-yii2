<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<?php foreach ($aboutHome as $about): ?>
    <?php $image = CheckImagePathHelper::CheckImagePath($about->img, $imagePath, "/about-home/"); ?>

    <div class="post-item border about-home">
        <div class="post-item-wrap">
            <div class="post-image">
                <a href="<?= Url::to(['home/about', 'id' => $about->id]) ?> ">
                    <?= Html::img("@web/images/about-home/{$image}",
                        [
                            'alt' => $about->title,
                            'style' => 'width: 260px; height: 173px;',
                        ]
                    ); ?>
                </a>
            </div>
            <div class="post-item-description">
                <h2>
                    <a href="<?= Url::to(['home/about', 'id' => $about->id]) ?> ">
                        <?= $about->title; ?>
                    </a>
                </h2>

                <p><?= $about->mini_description; ?></p>
                <a href="<?= Url::to(['home/about', 'id' => $about->id]) ?> " class="item-link">
                    Подробнее...<i class="icon-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>

<?php endforeach; ?>
