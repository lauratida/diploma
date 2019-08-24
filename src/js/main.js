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

  // Подключаем слайдер секции Акции
  $('.stock-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    dotsClass: 'stock-slider-dot',
    // customPaging: function(slick, index) {
    //   var image = $(slick.$slides[index]).find('.slider__img').attr('srcprev');
    //   return '<img src="' + image + '" alt="" /> '
    // },
    appendDots: $('.stock-slider__dots'),
    customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<a>'+(i+1).toString().padStart(2, '0')+'</a>';
    },
  });

  // Подключаем слайдер секции Покупатели
  $('.mention__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    dotsClass: 'mention-slider-dot',
    appendDots: $('.mention__slider-dots'),
    customPaging: function(slick, index) {
      var image = $(slick.$slides[index]).find('.mention-card__text').attr('dotimg');
      var name = $(slick.$slides[index]).find('.mention-card__text').attr('dotname');
      var addres = $(slick.$slides[index]).find('.mention-card__text').attr('dotaddres');

      return '<img src="' + image + '" alt=""><span class="block"><span class="bold block">' + name + '</span>' + addres + '</span>'
    }
  });
});