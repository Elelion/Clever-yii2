<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php foreach ($services as $service): ?>
    <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
        <div class="icon-box effect medium border small">
            <div class="icon">
                <a href="<?= Url::to(['home/services', 'id' => $service->id]) ?>" >
                    <i>
                        <?= Html::img("@web/images/services-home/{$service->img}",
                            [
                                'alt' => $service->title,
                                'style' => 'width: 36px; height: 36px; margin-top: -8px;',
                            ]
                        ); ?>
                    </i>
                </a>
            </div>

            <h3><?= $service->title; ?></h3>
            <p><?= $service->description; ?></p>
        </div>
    </div>
<?php endforeach; ?>

