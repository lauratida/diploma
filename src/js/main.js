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
});