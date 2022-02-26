

$(document).ready(function () {

  $('#btn-cadastro').click(function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: 'controller/api.php',
      data: {
        'action': 'cadastro',
        'user': $('.modal input[name=user]').val(),
        'pass': $('.modal input[name=pass]').val(),
      },
      dataType: 'json',
      beforeSend: function () {
        $('#btn-cadastro').html('Aguarde...');
      },
      success: function (data) {
        $('#btn-cadastro').html('Cadastrar');

        if (data.type) {
          Swal.fire(
            'Cadastrado!',
            data.msg,
            'success'
          );
          $('.modal').modal('hide');
          $('.modal input[name=user]').val('');
          $('.modal input[name=pass]').val('');
        } else {
          Swal.fire(
            'Ops!',
            data.msg,
            'question'
          );
          $('.modal input[name=user]').addClass('is-invalid');
          $('.modal input[name=pass]').addClass('is-invalid');
        }


      },
      error: function () {
        Swal.fire(
          'Ops!',
          'Algo deu errado :(',
          'question'
        );
      }
    });
  })

  $('#btn-login').click(function () {

    $.ajax({
      type: "POST",
      url: 'controller/login.php',
      data: {
        'user': $('#login input[name=user]').val(),
        'pass': $('#login input[name=pass]').val(),
      },
      dataType: 'json',
      beforeSend: function () {
        $('#btn-login').html('Aguarde...');
      },
      success: function (data) {
        $('#btn-login').html('Entrar');

        if (data.type) {
          location.href = "http://localhost/Projeto/view/home.php";
        }

        if (!data.type) {
          Swal.fire(
            'Ops!',
            data.msg,
            'question'
          );
        }

      },
      error: function () {
        $('#btn-login').html('Entrar');

        Swal.fire(
          'Ops!',
          'Algo deu errado :(',
          'question'
        );
      }
    });
  })

});