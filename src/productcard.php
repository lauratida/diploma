<?php 
include 'header.php';
?>

<main class="catalog productcard">
  <div class="container">
    <!-- Первоя строка ссылками после меню -->
    <ul class="catalog-navigation">
      <li class="catalog-navigation__item"><a href="index.php" class="catalog-navigation__link">Главная</a>/</li>
      <li class="catalog-navigation__item"><a href="katalog.php" class="catalog-navigation__link">Каталог товаров</a>
      </li>
    </ul>

    <div class="catalog-content-wrap">

      <!-- Меню для каталога и карточки товаров -->
      <?php 
      include 'catalog-menu.php';
      ?>

      <div class="productcard-content-wrap">
        <!-- Заголовок и сортировка -->
        <h1 class="catalog__title">Гостинная “иррида”</h1>

        <!-- Карточка товара. Секция фото и основное -->
        <section class="product-about">
          <div class="product-slaider-wrap">
            <div class="product-about-bigslide">
              <div class="product-about-bigslide__item">
                <div class="product-about-bigslide__arrowsl"><img src="img/product-card/arrow-left.png" alt=""></div>
                <div class="product-about-bigslide__img" data-srcprev="img/product-card/product-main-prev-1.jpg"><img
                    src="img/product-card/full_image-1.png" alt=""></div>
                <div class="product-about-bigslide__arrowsr"><img src="img/product-card/arrow-right.png" alt=""></div>
                <div class="rating">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                </div>
              </div>
              <div class="product-about-bigslide__item">
                <div class="product-about-bigslide__arrowsl"><img src="img/product-card/arrow-left.png" alt=""></div>
                <div class="product-about-bigslide__img" data-srcprev="img/product-card/product-main-prev-1.jpg"><img
                    src="img/product-card/full_image-1.png" alt=""></div>
                <div class="product-about-bigslide__arrowsr"><img src="img/product-card/arrow-right.png" alt=""></div>
                <div class="rating">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                </div>
              </div>
              <div class="product-about-bigslide__item">
                <div class="product-about-bigslide__arrowsl"><img src="img/product-card/arrow-left.png" alt=""></div>
                <div class="product-about-bigslide__img" data-srcprev="img/product-card/product-main-prev-1.jpg"><img
                    src="img/product-card/full_image-1.png" alt=""></div>
                <div class="product-about-bigslide__arrowsr"><img src="img/product-card/arrow-right.png" alt=""></div>
                <div class="rating">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_yellow.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                  <img src="img/сatalog/star_grey.png" alt="">
                </div>
              </div>
            </div>
            <div class="product-about-prevslide">
            </div>
          </div>
          <div class="product-about-main">
            <p class="product-about-main__text">Не следует, однако забывать, что начало повседневной работы по
              формированию позиции позволяет оценить значение существенных финансовых и административных условий. Задача
              организации, в особенности же сложившаяся структура организации способствует подготовки и реализации
              системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна,
              что рамки и место обучения кадров играет важную роль структура организации способствует подготовки и
              реализации системы обучения </p>

            <h3 class="product-about-main__price">Цена за ед.<strong class="minicard__price">89 руб. <span
                  class="minicard__price-line">100 руб</span></strong></h3>
            <form action="#" method="POST"></form>
            <div class="product-about-main__count" data-trigger="spinner">
              <span class="bold count-right block">Количество</span>
              <span class="minus bold" data-spin="down">-</span>
              <input type="text" class="input input_number" value="1" data-ruler="quantity" data-min="0">
              <span class="plus bold" data-spin="up">+</span>
            </div>
            <div class="product-about-main__buttons">
              <a href="#" class="button button_a button_orange button_product">Купить в один клик</a>
              <a href="#" class="button button_a button_product">В корзину</a>
            </div>
          </div>
        </section>

        <div class="product-detail">
          <div class="product-detail__dots"></div>
          <div class="product-detail__slider">
            <div class="product-detail__item">
              <p class="product-detail__desc" data-label="Описание">Не следует, однако забывать, что новая модель
                организационной деятельности требуют определения и уточнения дальнейших направлений развития. Не
                следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности
                обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.
                Идейные соображения высшего порядка, а также рамки и место обучения кадров в значительной степени
                обуславливает создание существенных финансовых и административных условий. Задача организации, в
                особенности же консультация с широким активом требуют определения и уточнения модели развития. </p>
            </div>
            <div class="product-detail__item">
              <p class="product-detail__desc" data-label="Характеристики">Не следует, однако забывать, что новая модель
                организационной деятельности требуют определения и уточнения дальнейших направлений развития. Не
                следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности
                обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.
                Идейные соображения высшего порядка, а также рамки и место обучения кадров в значительной степени
                обуславливает создание существенных финансовых и административных условий. Задача организации, в
                особенности же консультация с широким активом требуют определения и уточнения модели развития. Lorem
                ipsum dolor sit, amet consectetur adipisicing elit. In eius eveniet, dicta eos totam veniam at explicabo
                quam dolor aspernatur dolorem rem amet quidem mollitia esse deserunt temporibus adipisci consectetur.
              </p>
            </div>
          </div>
        </div>

        <div class="similar">
          <h3 class="similar__title">Похожие товары</h3>
          <div class="catalog-products">
            <!-- Мини - Карточка товара -->
            <?php 
            include 'minicard.html';
            ?>

            <!-- Мини - Карточка товара -->
            <?php 
            include 'minicard.html';
            ?>

            <!-- Мини - Карточка товара -->
            <?php 
            include 'minicard.html';
            ?>
            
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<?php 
include 'footer.php';
?>