<?php

use app\helpers\CheckImagePathHelper;
use app\models\CatalogGroup;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var CatalogGroup[] $catalogList
 * @var String $imagePath
 * @var string $visible
 */

?>


<?php foreach ($catalogList as $catalog): ?>
    <?php $image = CheckImagePathHelper::CheckImagePath($catalog->img, $imagePath, "/catalog/"); ?>

    <div class="post-item border portfolio-item <?= $catalog->class; ?>">
        <div class="post-item-wrap">
            <div class="post-image">
                <a href="<?= Url::to(['catalog/subgroup', 'id' => $catalog->id_group]); ?> ">
                    <?= Html::img("@web/images/catalog/{$image}",
                        [
                            'alt' => $catalog->title,
                        ]
                    ); ?>
                </a>
            </div>

            <div class="post-item-description">
                <h2>
                    <a href="<?= Url::to(['catalog/subgroup', 'id' => $catalog->id_group]); ?> ">
                        <?= $catalog->title; ?>
                    </a>
                </h2>

                <p><?= $catalog->description; ?></p>
                <a href="<?= Url::to(['catalog/subgroup', 'id' => $catalog->id_group]); ?> " class="item-link">
                    Подробнее...<i class="icon-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
