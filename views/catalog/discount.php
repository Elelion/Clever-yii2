<?php

use app\models\CatalogDiscount;
use app\widgets\CatalogDiscountWidget;

/**
 * @var CatalogDiscount[] $catalogDiscount
 * @var String $imagePath
 */

?>


<section class="content">
  <div class="container">
    <div class="col-lg-12 p-t-20">
      <div class="heading-text heading-section">
        <h2>Акции и предложения</h2>
      </div>
    </div>
  </div>
</section>

<!-- IMAGE BLOCK -->
<?= CatalogDiscountWidget::widget(['catalog' => $catalogDiscount, 'imagePath' => $imagePath]); ?>
<!-- end: IMAGE BLOCK -->
