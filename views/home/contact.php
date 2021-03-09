<?php

use app\widgets\PortfolioWidget;
use app\widgets\TeamMemberWidget;

/**
 * @var String $imagePath
 */

?>


<section id="page-content contact__wrapper" class="contact__wrapper">
  <div class="container">

      <!-- NOTE: contact information -->
      <section class="p-t-20 p-b-20">
          <div class="col-lg-12">
              <div class="heading-text heading-section">
                  <h2>Контакты</h2>
              </div>
          </div>

          <div class="col-lg-12 p-b-40">
              <b>Общая информация</b>
              <br>
              Любую нашу продукцию вы можете заказать не выходя из дома.
              Наши специалисты приедут к вам абсолютно бесплатно с нужными вам образцами
              нашей продукции в пределах Липецкой области. Так же наши специалисты могут
              произвести требуемые замеры, рассчитать стоимость и заключат договор!
              В нашем офисе представлены образцы всех оконных и дверных систем, которые
              вы можете подобрать под себя.
              <br>
              <i style="color: red;">уникальность 78%</i>
          </div>

          <div class="col-lg-3">
              <div class="contact__block">
                  <b>Наш адрес:</b>
                  <br>
                  398037, г. Липецк,
                  Трубный проезд, 5К
              </div>

              <div class="contact__block m-t-20">
                  <b>Как проехать:</b>
                  <br>
                  с ул. Опытная или через парковку за магазином Посуда-Центр (см. карту ниже).
              </div>

              <div class="contact__block m-t-20">
                  <b>Часы работы:</b>
                  <br>
                  Пн-Пт: с 08:00 до 18:00
                  <br>
                  Сб: с 10:00 до 14:00
                  <br>
                  Вс: выходной
              </div>

              <div class="contact__block m-t-20">
                  <b>Телефон офиса:</b>
                  <br>
                  <a href="tel:+74742565555"> +7 (4742) 56-55-55</a>
              </div>

              <div class="contact__block m-t-20 m-b-20">
                  <b>Написать нам:</b>
                  <br>
                  офис:
                  <a href="mailto: <?= \Yii::$app->params['senderEmail']; ?>">
                      <?= \Yii::$app->params['senderEmail']; ?></a>

                  <br>

                  снабжение:
                  <a href="mailto: <?= \Yii::$app->params['deliveryEmail']; ?>">
                      <?= \Yii::$app->params['deliveryEmail']; ?></a>

                  бухгалтерия:
                  <a href="mailto: <?= \Yii::$app->params['finEmail']; ?>">
                      <?= \Yii::$app->params['finEmail']; ?></a>
              </div>
          </div>

          <div class="col-lg-9">
              <script type="text/javascript"
                      charset="utf-8"
                      async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A208c0a3c39f58475b652b51dae3059ae0791c765be70bf67dc30d6a7da3aad1a&amp;width=100%25&amp;height=648&amp;lang=ru_RU&amp;scroll=false">
              </script>
          </div>
      </section>
      <!-- NOTE: end: contact information -->

      <!-- NOTE: legal information -->
      <div class="col-lg-12 m-t-70 m-b-20">
        <div class="heading-text heading-section">
          <h2>Юридическая информация</h2>
        </div>
      </div>

      <div class="col-lg-8">
          Полное наименование юридического лица:
          <br>
          Общество с ограниченной ответственностью «Клевер»
          <br>
          Юридический адрес:
          <br>
          398037, Липецкая область, г. Липецк, Трубный проезд, стр.5К
          <br>
          ИНН: ??? / КПП: ???
          <br>
          ОГРН: ???
          <br>
          ОКПО: ???
          <br>
          ОКТМО: ???
          <br>
          ОКВЭД: ???
          <br>
          Банковские реквизиты:
          <br>
          Расчетный счет: ???
          <br>
          Банк: ПАО "???"
          <br>
          Кор/счет: ???
          <br>
          БИК: ???
      </div>
      <div class="col-lg-4 m-t-20">
          <!-- NOTE: zoom -->
          <?= PortfolioWidget::widget([
              'classAdditional' => 'contact__block-certificate',
              'images' => ['1.jpg'],
              'imagePath' => $imagePath,
              'description' => [
                  'Свидетельство о постановке на учет в налоговом органе',
              ]]); ?>

          <br>
          <i style="color: red;">Поставноление на учетв налоговой</i>
      </div>
      <!-- NOTE: end: legal information -->

      <!-- NOTE: out team -->
      <section>
          <div class="col-lg-12">
              <div class="heading-text heading-section">
                  <h2>Наша команда</h2>
                  <p>Вместе мы создадим тепло и уют в вашем доме</p>
              </div>

              <div class="row team-members">

                  <?= TeamMemberWidget::widget([
                      'image' => '1.jpg',
                      'imagePath' => $imagePath,
                      'title' => 'Alena Smith',
                      'position' => 'Software Developer',
                      'description' => 'orem ipsum dolor sit amet, consecte adipiscing elit',
                      'socials' => ['https://www.vk.com', 'https://www.instagram.com', 'test@test.ru'],
                  ]); ?>

                  <?= TeamMemberWidget::widget([
                      'image' => '2.jpg',
                      'imagePath' => $imagePath,
                      'title' => 'Joh smith',
                      'position' => 'Team lead',
                      'description' => 'orem ipsum dolor sit amet, consecte adipiscing elit',
                      'socials' => ['https://www.vk.com', 'https://www.instagram.com', null],
                  ]); ?>

                  <?= TeamMemberWidget::widget([
                      'image' => '3.jpg',
                      'imagePath' => $imagePath,
                      'title' => 'J Lopez',
                      'position' => 'Music dancer',
                      'description' => 'orem ipsum dolor sit amet, consecte adipiscing elit',
                      'socials' => ['https://www.vk.com', null, 'test@test.ru'],
                  ]); ?>

                  <?= TeamMemberWidget::widget([
                      'image' => '4.jpg',
                      'imagePath' => $imagePath,
                      'title' => 'Shazam Marvel',
                      'position' => 'hero',
                      'description' => 'orem ipsum dolor sit amet, consecte adipiscing elit',
                      'socials' => [null, null, 'test@test.ru'],
                  ]); ?>

              </div>
          </div>
      </section>
      <!-- NOTE: end: out team -->

  </div>
</section>
