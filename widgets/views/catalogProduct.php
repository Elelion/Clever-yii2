<?php

use app\helpers\CheckImagePathHelper;
use app\models\CatalogProduct;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var CatalogProduct[] $catalogList
 * @var String $imagePath
 * @var string $visible
 */

?>


<?php foreach ($catalogList as $catalog): ?>
    <?php $image = CheckImagePathHelper::CheckImagePath($catalog->img, $imagePath, "/catalog/"); ?>

    <div class="post-item border portfolio-item <?= $catalog->class; ?>" >
        <div class="post-item-wrap">
            <a href="<?= Url::to(['catalog/product', 'id' => $catalog->id]) ?> ">
                <div class="post-image">
                    <?= Html::img("@web/images/catalog/{$image}",
                        [
                            'class' => 'catalog__product-image',
                            'alt' => $catalog->title,
                        ]
                    ); ?>

                    <?php if ($catalog->alert != null): ?>
                        <span class="post-meta-category catalog__meta-category">
                            <?= $catalog->alert; ?>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="post-item-description catalog__product-description">
                    <h2><?= $catalog->title; ?></h2>
                </div>
            </a>
        </div>
    </div>
<?php endforeach; ?>
