

$(document).ready(function () {

  $('#customRange').change(function () {
    let val = $(this).val();
    tipo = 0;

    if (val >= 0 && val <= 25) {

      $('nav').addClass('color-1');
      $('nav').removeClass('color-2');
      $('nav').removeClass('color-3');
      $('nav').removeClass('color-4');

      tipo = 1;

    } else if (val > 26 && val <= 51) {

      $('nav').addClass('color-2');
      $('nav').removeClass('color-1');
      $('nav').removeClass('color-3');
      $('nav').removeClass('color-4');

      tipo = 2;

    } else if (val > 52 && val <= 76) {

      $('nav').addClass('color-3');
      $('nav').removeClass('color-1');
      $('nav').removeClass('color-2');
      $('nav').removeClass('color-4');

      tipo = 3;

    } else if (val > 77 && val <= 100) {

      $('nav').addClass('color-4');
      $('nav').removeClass('color-1');
      $('nav').removeClass('color-2');
      $('nav').removeClass('color-3');

      tipo = 4;

    }

    $.ajax({
      type: "POST",
      url: 'controller/api.php',
      data: {
        'action': 'setCookie',
        'name': 'cookieLayout',
        'expired': false,
        'tipo': tipo,
      },
      // beforeSend: function () {
      //   $('.delete-' + idDeleted).html('Aguarde...');
      // },
      success: function (data) {
        json = JSON.parse(data);

        document.cookie = json.name + "=" + json.value + "=" + json.tipo;
      },
    });

  });

});