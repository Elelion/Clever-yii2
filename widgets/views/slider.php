<?php

use yii\helpers\Url;

?>

<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
    <?php foreach ($slider as $slide): ?>
        <?php if ($slide->img_type == 'image'): ?>
            <div class="slide kenburns" data-bg-image="images/slider/<?= $slide->img; ?> ">
        <?php else: ?>
            <div class="slide" data-bg-video="images/slider/<?= $slide->img; ?> ">
        <?php endif; ?>

            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">

                    <!-- NOTE: Captions -->
                    <h1><?= $slide->title; ?></h1>
                    <p><?= $slide->mini_description; ?></p>

                    <div>
                        <a href="<?= Url::to(['home/slider', 'id' => $slide->id]) ?>"
                            class="btn scroll-to slide-captions__button">Подробнее</a>
                    </div>
                    <!-- NOTE: end: Captions -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
