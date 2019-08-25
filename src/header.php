<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>МЕБЕЛЬLIKE Ваш комфорт - современная и высококачественная мебель для вашего дома</title>

  <!-- Подключение шрифтов -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <!-- Подключение стилей -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick.css">

</head>
<body>
  <!-- Окно благодарности -->
  <div class="modal" id="modal-succes">
    <div class="modal-success">
      <button class="modal__close" id="closesuccessmodal">&times;</button>
      <span class="block treatment">Спасибо, <span id="sucess-user">12345посетитель</span>!</span>
      <span>Наш менеджер перезвонит Вам&nbsp;в&nbsp;течении 60&nbsp;секунд </span>
    </div>
  </div>
  <!-- Модальное окно -->

  <header class="header">
    <!-- Logobar из шапки сайта -->
    <div class="wrap-line">
        <div class="container">
          <div class="logobar">
            <div class="logobar__logo">
              <div class="logobar__logoimg">
                <img src="img/header/logo-big.png" alt="logo">
              </div>
        
              <input placeholder="Поиск по сайту" type="text" class="input input__search">
              <button class="button_search"><img src="img/header/search.png" alt=""></button>
            </div>
      
            <div class="logobar__contacts">
              <div class="logobar__basket">
                <div class="logobar__basket-icon"><img src="img/header/icon_basket.svg" alt=""></div>
                <a href="#" class="logobar__basket-sum bold">15 000 рублей</a>
              </div>
          
              <div class="logobar__phone">
                <div class="logobar__phone-icon"><img src="img/header/icon_phone.svg" alt=""></div>
                <a href="tel:+79504302525" class="logobar__phone-number bold">+7 (950) 430-25-25</a>
              </div>
        
              <div class="logobar__phone">
                  <div class="logobar__phone-icon"><img src="img/header/icon_phone.svg" alt=""></div>
                <a href="tel:+79993504550" class="logobar__phone-number bold">+7 (999) 350-45-50</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Меню -->
    <div class="container">
      <nav class="menu">
        <a href="#" class="toggle-button"><span class="toggle-button__icon"></span></a>
        <ul class="menu__links">
          <li class="menu__item"><a href="catalog.php" target="_blank">Каталог </a>
            <button class="button-addsubmenu button-addsubmenu_one">&gt;</button>
            <ul class="submenu submenu_one">
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Кухня</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Обеденные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кухонные уголки</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Стулья</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Табуреты</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комплектующие</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Гостиная</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">ТВ-тумбы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Журнальные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Мягкая мебель</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Стеллажи</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Спальня</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комоды</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Тумбы прикроватные</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Туалетные столики</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кровати</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Матрасы</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Детская</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Письменные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Компьютерные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кровати детские</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы детские</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комоды и тумбы</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Прихожая</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Обувницы</a></li>
                  
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Зеркала</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Вешалки</a></li>
                </ul>
              </li>
            </ul> <!-- submenu -->
          </li>
          <li class="menu__item"><a href="#">Услуги</a>
            <button class="button-addsubmenu button-addsubmenu_one">&gt;</button>
            <ul class="submenu">
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Сборка кухни</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Обеденные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кухонные уголки</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Стулья</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Табуреты</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комплектующие</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Сборка корпуса</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">ТВ-тумбы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Журнальные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Мягкая мебель</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Стеллажи</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Доставка</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комоды</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Тумбы прикроватные</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Туалетные столики</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кровати</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Матрасы</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Детская</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Письменные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Компьютерные столы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Кровати детские</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы детские</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Комоды и тумбы</a></li>
                </ul>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-category__title">Прихожая</a>
                <ul class="submenu-category__list">
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Обувницы</a></li>
                  
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Шкафы</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Зеркала</a></li>
                  <li class="submenu-category__item"><a href="#" class="submenu-category__link">Вешалки</a></li>
                </ul>
              </li>
            </ul> <!-- submenu -->
          </li>
          <li class="menu__item"><a href="#">О магазине</a></li>
          <li class="menu__item"><a href="#">Акции и распродажа</a></li>
          <li class="menu__item"><a href="#">Доставка и оплата</a></li>
          <li class="menu__item"><a href="#">Контакты</a></li>
        </ul>
        <button class="button button_orange button__invite" id="invite-button">Вызвать замерщика</button>
        <button class="button button__recall" id="call-button">Обратный звонок</button>
      </nav>
    </div>
  </header>