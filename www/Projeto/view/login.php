<?php

$url = 'login';

require_once('model/header.php');

$cssJs = new cssJs();
$css = $cssJs->css($url);

?>

<div class="container">

  <div class="row bg g-0 mt-5">

    <div class="col">
      <div class="box-bottom line-vertical py-3 px-2">
        <div class="text-light">
          <h6>Meu nome é Roberto Enrico e peço para que você faça seu cadastro na minha API disponível abaixo, para realizar o acesso ao Sistema.</h6></br>

          <h5>Parâmetros:</h5>
          <p>- URL: (http://localhost/Projeto/controller/api.php)</br>- Tipo: POST</p>

          <h5>Parâmetros obrigatórios:</h5>
          <p>- Usuário</br> - Senha</br></p>

          <h5>Observação:</h5>
          <p>- Caso você faça uma requisição com os valores no formato json, passar no link da api o atributo "json" com o valor igual a "1". </br>
            Ex: http://localhost/Projeto/controller/api.php?json=1
          </p>
        </div>
      </div>
    </div>

    <div class="col" id="login">
      <div class="box-top py-3 px-2">
        <h3 class="text-light text-center m-5">Style Web Full</h3>
        <form class="myform">
          <div class="form-group"> <input type="text" class="form-control" name="user" placeholder="Usuário"> </div>
          <div class="form-group"> <input type="password" class="form-control" name="pass" placeholder="Senha"> </div>
          <div class="mt-3 mb-5">
            <a href="#" class="btn btn-primary" id="btn-login"><small> Entrar </small></a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-cadastro"><small> Cadastre-se </small></a>
          </div>
        </form>
      </div>
    </div>

  </div>

  <!-- MODAL CADASTRO -->
  <div class="modal fade" id="modal-cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group"> <input type="text" class="form-control" name="user" placeholder="Usuário"> </div>
          <div class="form-group"> <input type="password" class="form-control" name="pass" placeholder="Senha"> </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="btn-cadastro">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>

</div>


<?php

echo $js = $cssJs->js($url);

?>