$(document).ready(function () {
  // Маска для телефона
  jQuery(function ($) {
    $("#userphone").mask("+7 (999) 999-99-99");
  });
  jQuery(function ($) {
    $("#userphonei").mask("+7 (999) 999-99-99");
  });
  // Валидация формы и запуск ajax отрпавки при успешной обработке
    $('#invitemodal').validate({
      rules: {
        username: {
          required: true,
          minlength: 2,
          maxlength: 15,
        },
        userphone: {
          required: true,
        }
      },
      messages: {
        username: {
          required: "Заполните Имя",
          minlength: "Введите больше 2 символов",
          maxlength: "Введите меньше 15 символов",
        },
        userphone: {
          required: "Заполните номер телефона",
        }
      },
      errorClass: "invalid",
      errorElement: "div",
      submitHandler: function (form) {
        event.preventDefault();
        $.ajax({
          url: './mail.php',
          type: 'post',
          data: $(form).serialize(),
          success: function (data) {
            // yaCounter54884206.reachGoal('FormSubmit');
            var nameForm
            nameForm = $('#forminvitemodal__submit').attr('value');

            if (nameForm == 'Вызывать замерщика') {
              // console.log('Ура, твою налево, работает');
              yaCounter55062736.reachGoal('FormInviteModal');
            } else {
              yaCounter55062736.reachGoal('FormRecallModal');
            };

            
            // Очистка полей формы
            $('#username').val('');
            $('#userphone').val('');

            $('#usernamei').val('');
            $('#userphonei').val('');

            $('#usernamec').val('');
            $('#userphonec').val('');

            // Вывод ответа в модальном окне
            $('#sucess-user').html(data);
            $('#sucess-user').addClass('bold');
            $('#modal-succes').addClass('modal_active');
            // Автозакрытие
            var timerId;
            timerId = setTimeout(function () {
              $('#modal-succes').removeClass('modal_active');
            }, 5000);
            // Закрытие на кнопку-крестик
            $('#closesuccessmodal').on('click', function () {
              clearTimeout(timerId);
              $('#modal-succes').removeClass('modal_active');
            });

          },
          error: function (jqXHR, textStatus) {
            console.log(jqXHR + ': ' + textStatus);
          },
        });
      }
    });
  
  $('#inviteindex').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      userphone: {
        required: true,
      }
    },
    messages: {
      username: {
        required: "Заполните Имя",
        minlength: "Введите больше 2 символов",
        maxlength: "Введите меньше 15 символов",
      },
      userphone: {
        required: "Заполните номер телефона",
      }
    },
    errorClass: "invalid",
    errorElement: "div",
    submitHandler: function (form) {
      event.preventDefault();
      $.ajax({
        url: './mail.php',
        type: 'post',
        data: $(form).serialize(),
        success: function (data) {
          yaCounter55062736.reachGoal('FormInviteIndex');
          // Очистка полей формы
          $('#username').val('');
          $('#userphone').val('');

          $('#usernamei').val('');
          $('#userphonei').val('');

          $('#usernamec').val('');
          $('#userphonec').val('');

          // Вывод ответа в модальном окне
          $('#sucess-user').html(data);
          $('#sucess-user').addClass('bold');
          $('#modal-succes').addClass('modal_active');
          // Автозакрытие
          var timerId;
          timerId = setTimeout(function () {
            $('#modal-succes').removeClass('modal_active');
          }, 5000);
          // Закрытие на кнопку-крестик
          $('#closesuccessmodal').on('click', function () {
            clearTimeout(timerId);
            $('#modal-succes').removeClass('modal_active');
          });

        },
        error: function (jqXHR, textStatus) {
          console.log(jqXHR + ': ' + textStatus);
        },
      });
    }
  });
  
});