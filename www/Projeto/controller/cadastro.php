<?php

if (isset($_GET['json']) && $_GET['json'] == '1') {
  $_POST = json_decode(file_get_contents("php://input"), true);
}

$user = isset($_POST['user']) ? $_POST['user'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if (empty($user) || empty($pass)) {
  echo json_encode(array(
    'type' => false,
    'msg' => "Obrigátorio preencher os campos",
  ));
  return false;
}

// extrai a informação do ficheiro
$valores = file_get_contents("logs/cadastro.json");

// faz o decode o json para uma variavel php que fica em array
$json = json_decode($valores, true);

if (isset($json["cadastro"][$user])) {
  echo json_encode(array(
    'type' => false,
    'msg' => "Usuário já cadastrado!",
  ));
  return false;
}

//Verifica se já existe um cadastro
$json_data = json_decode(file_get_contents('logs/cadastro.json'));
foreach ($json_data as $key => $object) {
  foreach ($object as $val) {

    if ($val->user == $user && $val->pass == $pass) {
      echo json_encode(array(
        'type' => false,
        'msg' => "Já existe um cadastro com esse Usúario!",
      ));
      return false;
    }
  }
}

// aqui é onde adiciona a nova linha ao ao array cadastro
$val = [];
$val = array(
  'user' => $user,
  'pass' => $pass,
);

$json["cadastro"][] = $val;

// abre o ficheiro em modo de escrita
$fp = fopen('logs/cadastro.json', 'w');

// escreve no ficheiro em json
fwrite($fp, json_encode($json));

// fecha o ficheiro
fclose($fp);

if ($fp) {
  echo json_encode(array(
    'type' => true,
    'msg' => "Cadastro realizado com sucesso!",
  ));
}
