$(document).ready(function () {

  // для ие, определяем padStart
  if (!String.prototype.padStart) {
    String.prototype.padStart = function padStart(targetLength, padString) {
        targetLength = targetLength >> 0; //truncate if number, or convert non-number to 0;
        padString = String(typeof padString !== 'undefined' ? padString : ' ');
        if (this.length >= targetLength) {
            return String(this);
        } else {
            targetLength = targetLength - this.length;
            if (targetLength > padString.length) {
                padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
            }
            return padString.slice(0, targetLength) + String(this);
        }
    };
  }
  // Открытие и закрытие бургер меню
  $('.toggle-button').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('toggle-button_active');
    $('.menu__links').toggleClass('menu__links_active')
  });

  // Открытие и закрытие отдельных пунктов бургер меню
  $('.button-addsubmenu').on('click', function(e) {
    e.preventDefault;
    if($(this).hasClass('button-addsubmenu_active')) {
      $(this).toggleClass('button-addsubmenu_active');
      $(this).siblings('.submenu').toggleClass('submenu_active');
      $(this).parent().toggleClass('menu__item_hover');
    }else{
      $('.button-addsubmenu').removeClass('button-addsubmenu_active');
      $('.submenu').removeClass('submenu_active');
      $('.menu__item').removeClass('button-addsubmenu_active');
      $(this).toggleClass('button-addsubmenu_active');
      $(this).siblings('.submenu').toggleClass('submenu_active');
      $(this).parent().toggleClass('menu__item_hover');
    };


    // $('.submenu').removeClass('submenu_active');
    
  });

  // Подключаем слайдер после шапки
  $('.slider').slick({
    arrows: false,
    dots: true,
    dotsClass: 'slick-dots slider__dots',
    customPaging: function(slick, index) {
      var image = $(slick.$slides[index]).find('.slider__img').attr('data-srcprev');
      return '<img src="' + image + '" alt="" /> '
    }
  });
  // Добавляем классы для стилизации созданным слайдером элементам
  $('.slick-dots').children().addClass('slick-dots__item');
  $(".slick-dots").wrap("<div class='container container-slider'></div>");

  //Подключаем слайдер секции Акции
  $('.stock-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    dotsClass: 'stock-slider-dot',
    appendDots: $('.stock-slider__dots'),
    customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        var x = "Browser CodeName: " + navigator.appCodeName;
        console.log(x);
        
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
      var image = $(slick.$slides[index]).find('.mention-card__text').attr('data-dotimg');
      var name = $(slick.$slides[index]).find('.mention-card__text').attr('data-dotname');
      var addres = $(slick.$slides[index]).find('.mention-card__text').attr('data-dotaddres');

      return '<img src="' + image + '" alt=""><span class="block"><span class="bold block">' + name + '</span>' + addres + '</span>'
    }
  });
  // Плюс минус кнопки на карточке товаров
  /* $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 0 ? 0 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  }); */
  // Меню в футере при адаптиве
  $('.footer-submenu-category__title').on('click', function(e) {
    e.preventDefault;
    $('.mobail-footer__menu').html('');
    $(this).siblings('.submenu-category__list').clone().appendTo('.mobail-footer__menu');
    return false;
  }); 
  // Слайдер в карточке товаров
  $('.product-about-bigslide').slick({
    arrows: true,
    dots: true,
    dotsClass: 'product-about-prevslide__item',
    prevArrow: $('.product-about-bigslide__arrowsl'),
    nextArrow: $('.product-about-bigslide__arrowsr'),
    customPaging: function(slick, index) {
      var image = $(slick.$slides[index]).find('.product-about-bigslide__img').attr('data-srcprev');
      return '<img src="' + image + '" alt="" /> '
    }
  });
  // Слайдер описание и характеристики в карточке товаров
  $('.product-detail__slider').slick({
    arrows: false,
    dots: true,
    dotsClass: 'product-detail__dot',
    customPaging: function(slick, index) {
      var image = $(slick.$slides[index]).find('.product-detail__desc').attr('data-label');
      return '<span>' + image + '<span>'
    },
    appendDots: $('.product-detail__dots'),
    adaptiveHeight: true,
    draggable: false,
  });

});


// var text = $(this).siblings('.submenu-category__list').html();
//     console.log(text);