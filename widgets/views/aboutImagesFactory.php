<?php

use app\widgets\PortfolioWidget;

?>


<div id="portfolio" class="grid-layout portfolio-4-columns indent__top-middle" data-margin="0">

    <!-- NOTE: video -->
    <?= PortfolioWidget::widget([
        'classAdditional' => 'large-width ct-branding',
        'type' => 'video',
        'images' => ['portfolio-video-poster.jpg'],
        'imagePath' => $imagePath]); ?>

    <!-- NOTE: zoom -->
    <?= PortfolioWidget::widget([
        'images' => ['portfolio-link-1.jpg'],
        'imagePath' => $imagePath,
        'description' => ['test']
    ]); ?>

    <!-- NOTE: zoom -->
    <?= PortfolioWidget::widget([
        'images' => ['portfolio-link-2.jpg'],
        'imagePath' => $imagePath,
        'description' => ['Paper Pouch!']
    ]); ?>

    <!-- NOTE: zoom -->
    <?= PortfolioWidget::widget([
        'classAdditional' => 'large-width ct-branding',
        'images' => ['portfolio-link-1.jpg'],
        'imagePath' => $imagePath,
        'description' => ['test']
    ]); ?>

    <!-- NOTE: zoom -->
    <?= PortfolioWidget::widget([
        'images' => ['portfolio-link-2.jpg'],
        'imagePath' => $imagePath,
        'description' => ['Paper Pouch!']
    ]); ?>

    <!-- NOTE: zoom -->
    <?= PortfolioWidget::widget([
        'images' => ['portfolio-link-1.jpg'],
        'imagePath' => $imagePath,
        'description' => ['Paper Pouch!']
    ]); ?>

</div>