<?php

use app\helpers\CheckImagePathHelper;
use app\models\CatalogDiscount;
use yii\helpers\Html;

/**
 * @var CatalogDiscount[] $catalogDiscount
 * @var String $imagePath
 */

?>


<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-12">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Post item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <?php $image = CheckImagePathHelper::CheckImagePath($catalogDiscount->img, $imagePath, "/discount/"); ?>

                                    <?= Html::img("@web/images/discount/{$image}",
                                        [
                                            'alt' => 'Акции и предложения',
                                        ]
                                    ); ?>
                                </a>
                            </div>
                            <div class="post-item-description discount__full-description">
                                <h2><?= $catalogDiscount->title; ?></h2>

                                <div class="post-meta">
                                    <span class="post-meta-date">
                                        Акция действует до: <b><?= date('Y-m-d', strtotime($catalogDiscount->deadline)); ?></b>
                                    </span>
                                </div>

                                <p><?= $catalogDiscount->full_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
            </div>
            <!-- end: content -->

        </div>
    </div>
</section>
