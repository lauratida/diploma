<?php 
include 'header.php';
?>


<main class="catalog">
  <div class="container">
    <!-- Первоя строка ссылками после меню -->
    <ul class="catalog-navigation">
      <li class="catalog-navigation__item"><a href="index.php" class="catalog-navigation__link">Главная</a>/</li>
      <li class="catalog-navigation__item"><a href="сatalog.php" class="catalog-navigation__link">Каталог товаров</a>
      </li>
    </ul>

    <div class="catalog-content-wrap">

      <!-- Меню для каталога и карточки товаров -->
      <div class="catalog-menu">
        <div class="catalog-menu__item catalog-menu__title">
          <a href="сatalog.php" class="catalog-menu__name">Каталог товаров</a>
        </div>

        <div class="catalog-menu__item">
          <div class="catalog-menu__img"><img src="img/сatalog/catalog-menu__img-1.png" alt=""></div>
          <a href="#" class="catalog-menu__name">Кухня</a>
          <div class="catalog-menu__arrow"><img src="img/icon_detail.png" alt=""></div>
        </div>

        <div class="catalog-menu__item">
          <div class="catalog-menu__img"><img src="img/сatalog/catalog-menu__img-2.png" alt=""></div>
          <a href="#" class="catalog-menu__name">Гостиная</a>
          <div class="catalog-menu__arrow"><img src="img/icon_detail.png" alt=""></div>
        </div>

        <div class="catalog-menu__item">
          <div class="catalog-menu__img"><img src="img/сatalog/catalog-menu__img-3.png" alt=""></div>
          <a href="#" class="catalog-menu__name">Спальня</a>
          <div class="catalog-menu__arrow"><img src="img/icon_detail.png" alt=""></div>
        </div>

        <div class="catalog-menu__item">
          <div class="catalog-menu__img"><img src="img/сatalog/catalog-menu__img-4.png" alt=""></div>
          <a href="#" class="catalog-menu__name">Детская</a>
          <div class="catalog-menu__arrow"><img src="img/icon_detail.png" alt=""></div>
        </div>

        <div class="catalog-menu__item">
          <div class="catalog-menu__img"><img src="img/сatalog/catalog-menu__img-5.png" alt=""></div>
          <a href="#" class="catalog-menu__name">Прихожая</a>
          <div class="catalog-menu__arrow"><img src="img/icon_detail.png" alt=""></div>
        </div>
      </div>

      <div class="catalog-content-cardswrap">
        <!-- Заголовок и сортировка -->
        <h1 class="catalog__title">Каталог товаров</h1>
        <div class="sort">
          <span class="sort_text">Сортировать по:</span>
          <input type="radio" id="sort-name" name="sort-radio">
          <label class="sort-label" for="sort-name">Названию</label>
          <input type="radio" id="sort-price" name="sort-radio">
          <label class="sort-label" for="sort-price">Цене</label>
          <input type="radio" id="sort-new" name="sort-radio">
          <label class="sort-label" for="sort-new">Новинки</label>
        </div>

        <!-- Карточки товаров в каталоге -->
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
          <!-- Мини - Карточка товара -->
          <?php 
          include 'minicard.html';
          ?>

          
        </div> <!-- catalog-products -->
        <a href="#" id="viewmore" class="button button_a button_viewmore">Показать еще</a>
      </div>


    </div>
  </div>
</main>

<?php 
include 'footer.php';
?>