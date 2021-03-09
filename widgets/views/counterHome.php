<?php for ($i = 0; $i < 4; $i++): ?>
    <div class="col-lg-3">
        <div class="text-center">
            <div class="icon">
                <i class="fa fa-3x <?= $iconList[$i]; ?>"></i>
            </div>

          <div class="counter">
                <span
                    data-speed=<?= $speedList[$i]; ?>
                    data-refresh-interval="50"
                    data-to=<?= $targetList[$i]; ?>
                    data-from="1"
                    data-seperator="true">
                </span>
            </div>

            <div class="seperator seperator-small"></div>
            <p><?= $titleList[$i]; ?></p>
        </div>
    </div>
<?php endfor; ?>
