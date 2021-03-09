<?php

use app\models\AboutHome;
use app\widgets\AboutImagesWidget;

/**
 * @var AboutHome[] $about
 * @var String $imagePath
 */

?>


<section id="page-content">
    <div class="container">
        <div class="col-lg-12 p-t-20 p-b-20">
            <div class="heading-text heading-section">
                <h2><?= $about->title; ?></h2>
            </div>
        </div>

        <div class="col-lg-8">
            <?= $about->full_description; ?>
        </div>

        <?= AboutImagesWidget::widget([
            'model' => $about,
            'imagePath' => $imagePath,
        ]); ?>
    </div>
</section>