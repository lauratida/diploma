$(document).ready(function () {
  // Открытие и закрытие бургер меню
  $('.toggle-button').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('toggle-button_active');
    $('.menu__links').toggleClass('menu__links_active')
  });

  // Открытие и закрытие отдельных пунктов бургер меню
  $('.button-addsubmenu').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('button-addsubmenu_active');
    // $(".submenu").toggleClass('submenu_active');
    $(this).siblings('.submenu').toggleClass('submenu_active');
    // $('.menu__item').toggleClass('menu__item_hover');
    $(this).parent().toggleClass('menu__item_hover');
  });

  // Подключаем слайдер после шапки
  $('.slider').slick({
    arrows: false,
    dots: true,
    dotsClass: 'slick-dots slider__dots',
    customPaging: function(slick, index) {
      var image = $(slick.$slides[index]).find('.slider__img').attr('srcprev');
      return '<img src="' + image + '" alt="" /> '
    }
  });
  // Добавляем классы для стилизации созданным слайдером элементам
  $('.slick-dots').children().addClass('slick-dots__item');
  $(".slick-dots").wrap("<div class='container container-slider'></div>");
});