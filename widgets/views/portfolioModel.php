<?php

/**
 * @todo
 * check the implementation for all current view
 */


use app\helpers\CheckImagePathHelper;
use app\models\Portfolio;
use app\models\PortfolioImage;
use yii\helpers\Html;
use yii\helpers\Url;


/**
 * @note
 * using for image url, see below
 *
 * Yii::$app->request->hostInfo - return is -> http://localhost:8888
 * Yii::$app->request->getBaseUrl(true) - return is -> Clever/web
 *
 * @var string
 */
$imageUrl = Yii::$app->request->hostInfo . Yii::$app->request->getBaseUrl(true);

/**
 * @var string $imagePath
 * @var Portfolio $portfolio
 */

?>


<?php foreach($model as $portfolio): ?>

    <!-- NOTE: for gallery, see below -->
    <?php $imageList = PortfolioImage::find()
        ->where(['portfolio_id' => $portfolio->id])
        ->all();
    ?>

    <?php if ($portfolio->type_portfolio == 'slider'): ?>

        <!-- NOTE: slider -->
        <div class="portfolio-item <?= $portfolio->class; ?>">
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

                        <?php foreach ($portfolio->portfolioImages as $img): ?>
                            <?php $image = CheckImagePathHelper::CheckImagePath($img->img, $imagePath, "/portfolio/"); ?>

                            <a href="<?= Url::to('#'); ?>" >
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

    <?php else: ?>

        <!-- NOTE: gallery -->
        <div class="portfolio-item img-zoom <?= $portfolio->class; ?>">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <a href="#">

                        <?php foreach ($portfolio->portfolioImages as $img): ?>
                            <?php $posterImage = CheckImagePathHelper::CheckImagePath($img->img, $imagePath, "/portfolio/"); ?>

                            <?= Html::img("@web/images/portfolio/{$posterImage}",
                                [
                                    'alt' => '',
                                ]
                            ); ?>

                            <?php break; ?>

                        <?php endforeach; ?>

                    </a>
                </div>

                <div class="portfolio-description" data-lightbox="gallery">

                    <?php for ($i = 0; $i < count($portfolio->portfolioImages); $i++): ?>
                        <?php $image = CheckImagePathHelper::CheckImagePath($imageList[$i]->img, $imagePath, "/portfolio/"); ?>

                        <a title="<?= $portfolio->description; ?>"
                           data-lightbox="gallery-image"
                           href="<?= $imageUrl; ?>/images/portfolio/<?= $image; ?>"
                        >
                            <i class="<?= ($i < 1) ? 'fa fa-clone' : 'hidden'; ?>"></i>
                        </a>
                    <?php endfor; ?>

                </div>
            </div>
        </div>

    <?php endif; ?>

<?php endforeach; ?>
