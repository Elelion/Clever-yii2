<?php

use app\helpers\CheckImagePathHelper;
use app\models\CatalogDiscount;
use yii\helpers\Url;

/**
 * @var CatalogDiscount[] $catalogDiscountList
 * @var String $imagePath
 * @var integer $counter
 */

/**
 * @fixme
 * check way for hosting
 * Yii::$app->request->BaseUrl . '/images/discount/'
 */

/**
 * @note
 * if the number is even (0), then the block with the picture will be
 * on the left, if not (1), then on the right
 */
$counter = 0;
?>


<?php foreach ($catalogDiscountList as $catalog): ?>
    <?php $image = CheckImagePathHelper::CheckImagePath($catalog->img, $imagePath, "/discount/"); ?>

    <section id="image-block" class="image-block no-padding discount__wrapper">
        <div class="container-fluid">
            <div class="row">

                <?php if ($counter % 2 == 0): ?>
                    <div class="col-lg-6 discount__image"
                         style="
                             height: 609px;
                             background:url(<?= \Yii::$app->request->BaseUrl . '/images/discount/'
                              . $image; ?>) 50% 50% / cover no-repeat;">
                    </div>
                <?php endif; ?>

                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2><?= $catalog->title; ?></h2>
                        <span class="lead"><?= $catalog->description; ?></span>
                    </div>

                    <div class="post-meta m-b-40">
                        <span class="post-meta-date">
                            <i class="fa fa-calendar-o"></i>
                            До: <?= date('Y-m-d', strtotime($catalog->deadline)); ?>
                        </span>
                    </div>

                    <a href="<?= Url::to(['catalog/discount-detail', 'id' => $catalog->id]) ?>" class="btn btn-outline btn-dark">
                        <span>Подробнее...</span>
                    </a>
                </div>

                <?php if ($counter % 2 == 1): ?>
                    <div class="col-lg-6 discount__image"
                         style="
                             height: 609px;
                             background:url(<?= \Yii::$app->request->BaseUrl . '/images/discount/'
                              . $image; ?>) 50% 50% / cover no-repeat;">
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <?php $counter++; ?>
<?php endforeach; ?>
