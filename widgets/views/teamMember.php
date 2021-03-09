<?php

use app\helpers\CheckImagePathHelper;
use yii\helpers\Html;

?>


<div class="col-lg-3">
    <div class="team-member">
        <div class="team-image">
            <?php $img = CheckImagePathHelper::CheckImagePath($image, $imagePath, "/team/"); ?>
            <?= Html::img("@web/images/team/{$img}",
                [
                    'alt' => '',
                    'style' => '',
                ]
            ); ?>
        </div>

        <div class="team-desc">
            <h3><?= $title; ?></h3>
            <span><?= $position; ?></span>
            <p><?= $description; ?></p>

            <div class="align-center">
                <?php if (!empty($socials[0])): ?>
                    <a class="btn btn-xs btn-slide btn-light team__socials" href="<?= $socials[0]; ?>">
                        <i class="fab fa-vk"></i>
                        <span>vkontakte</span>
                    </a>
                <?php endif; ?>

                <?php if (!empty($socials[1])): ?>
                    <a class="btn btn-xs btn-slide btn-light team__socials" href="<?= $socials[1]; ?>" data-width="110">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                <?php endif; ?>

                <?php if (!empty($socials[2])): ?>
                    <a class="btn btn-xs btn-slide btn-light team__socials" href="mailto:<?= $socials[2]; ?>" data-width="80">
                        <i class="icon-mail"></i>
                        <span>Mail</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
