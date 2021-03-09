<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<div class="carousel client-logos"
     data-items="6"
     data-items-sm="4"
     data-items-xs="3"
     data-items-xxs="2"
     data-margin="20"
     data-arrows="false"
     data-autoplay="true"
     data-autoplay="3000"
     data-loop="true">

    <?php foreach ($clientsList as $client): ?>
        <?php $image = CheckImagePathHelper::CheckImagePath($client->img, $imagePath, "/clients-home/"); ?>
        <div>
            <a href="<?= Url::to('#'); ?>" >
                <?= Html::img("@web/images/clients-home/{$image}",
                    [
                        'alt' => $client->title,
                        'style' => 'height: auto;',
                    ]
                ); ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>