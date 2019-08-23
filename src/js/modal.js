$(document).ready(function(){
  var invite = $('#invite-button');
  var call = $('#call-button');
  // console.log(button);
  var modal = $('#modal1');
  var closesuccessmodal = $('#closesuccessmodal');
  var closeinvite = $('#closeinvite');
  var modalSucess = $('#modal-success')

  // // Открытие окна на кнопку Вызвать замерщика
  // invite.on('click', function(){
  //   // $("div.content").remove()
  //   modal.addClass('modal_active');
  // });
  // Закрытие окна Вызвать замерщика
  closeinvite.on('click', function(){
    modal.removeClass('modal_active');
  });
  // Закрытие окна благодарности
  closesuccessmodal.on('click', function(){
    modal.removeClass('modal_active');
    // $('.dialog-desc').removeClass('modal_active');
  });


  // закрыть по клику вне окна - Форма вызвать замерщика
  $(document).mouseup(function(e) {
    var popup = $('.modal-invite');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
      modal.removeClass('modal_active');
    }
  });
  // закрыть по клику вне окна - Окно благодарности не фурычит
  $(document).mouseup(function(e) {
    var popup = $('.modal-success');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
      modalSucess.removeClass('modal_active');
    }
  });


  // modal.on('click', function(){
  //   modal.removeClass('modal_active');
  // });
  // $('#modal').click(function() {
  //   if ($(event.target).closest('#modal').length == 0) {
  //       $(this).removeClass('modal_active');
  //   }                    
  // });

  $('#scrollbutton').on('click', function(){
    // сперва получаем позицию элемента относительно документа
    var scroll = $('#scroll').offset().top;
    // скроллим страницу на значение равное позиции элемента
    $("html, body").animate({ scrollTop: scroll }, 600);
    return false;
  });
  $(window).scroll(function() {
      if($(this).scrollTop() != 0) {
        $('#scrollbutton').fadeIn();
      } else {
        $('#scrollbutton').fadeOut();
      }
    });

  // Проверка метода по скроллу к нужному месту.
  // $('#herobutton').on('click', function(){
  //   $("html, body").animate({ scrollTop: $('#hero').offset().top }, 600);
  //   return false;
  // });

  // Подгрузка модальных окон при клике на ссылку
  var recall = $('#call-button')
  
  recall.on('click', function(event){
    event.preventDefault();
    modal.addClass('modal_active');
    // var target = $(this).attr('data-target');
    // $('.dialog-desc').addClass('modal_active');
    // $('.dialog-desc').load(target+".html");
    $('#forminvite__title').html('Обратный <br> звонок');
    $('#forminvite__subtitle').html('Отправьте заявку на обратный звонок и мы ответим на ваши вопросы по вашей новой мебели или кухни');
    $('#forminvite__submit').val('Обратный звонок');
    $('#formimg').attr('src','img/invite/recall.jpg');
  });
  invite.on('click', function(event){
    event.preventDefault();
    modal.addClass('modal_active');
    // var target = $(this).attr('data-target');
    // $('.dialog-desc').addClass('modal_active');
    // $('.dialog-desc').load(target+".html");
    $('#forminvite__title').html('Пригласить замерщика');
    $('#forminvite__subtitle').html('Отправьте заявку на замер и мы вместе расчитаем точную стоимость вашей новой мебели или кухни');
    $('#forminvite__submit').val('Вызывать замерщика');
    $('#formimg').attr('src','img/invite/invite.jpg');
  });

});