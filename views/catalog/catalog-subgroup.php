<?php

use \app\models\CatalogSubgroup;
use app\widgets\CatalogSubgroupWidget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var CatalogSubgroup[] $catalogSubgroup
 * @var String $imagePath
 */

?>


<section class="content">
    <div class="container">
        <div class="col-lg-12 p-t-20">
            <div class="heading-text heading-section">
                <h2>Продукция</h2>
            </div>
        </div>

        <div id="blog" class="grid-layout post-3-columns m-b-30 catalog-main__blog" data-item="post-item">
            <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

                <?= CatalogSubgroupWidget::widget(['catalog' => $catalogSubgroup, 'imagePath' => $imagePath]); ?>

            </div>
        </div>
    </div>
</section>
