<?php

use app\models\Slider;
use yii\helpers\Html;

/**
 * @var Slider $slider
 */

?>

<section id="page-content">
    <div class="container-fluid">
        <div class="grid-system-demo-live">
            <div class="row">
                <div class="col-lg-12 p-t-20 p-b-20">
                    <div class="heading-text heading-section">
                        <h2><?= $slider->title; ?></h2>
                    </div>
                </div>

                <div class="col-lg-8">
                    <?= $slider->full_description; ?>
                </div>

                <div class="col-lg-4">
                    <?= Html::img("@web/images/slider/" . $slider->img,
                        [
                            'class' => 'abt slideanim',
                            'alt' => $slider->title,
                            'style' => 'width: 380px; height: 280px;'
                        ]
                    ) ?>
                </div>
            </div>


            <!-- FIXME: if you want to place an image at the bottom -->
            <!--
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            -->
        </div>
    </div>
</section> <!-- end: Content -->