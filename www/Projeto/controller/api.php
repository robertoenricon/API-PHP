<?php

$json = '';
if (isset($_GET['json']) && $_GET['json'] == '1') {
  $json = "json=" . $_GET['json'];
}

$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {

  case 'setCookie':
    $url = 'http://localhost/Projeto/controller/cookie.php?' . $json;

    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $expired = isset($_POST['expired']) ? $_POST['expired'] : '';

    $parameters   = array(
      'name' => $name,
      'tipo' => $tipo,
      'expired' => $expired,
    );
    break;

  case 'cadastro':

    $url = 'http://localhost/Projeto/controller/cadastro.php?' . $json;

    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $parameters   = array(
      'user' => $user,
      'pass' => $pass,
    );
    break;

  default:
    break;
}

if (isset($_GET['json']) && $_GET['json'] == '1') {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($parameters),
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 0,

    // CURLOPT_HEADER => 1, //mostrar cabeçalho

    // CURLOPT_SSL_VERIFYHOST => 0,
    // CURLOPT_SSL_VERIFYPEER => 0,

  ));

  // $response = json_decode(curl_exec($curl));
  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
} else {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $parameters,

    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => 0,

    // CURLOPT_HEADER => 1, //mostrar cabeçalho

    // CURLOPT_SSL_VERIFYHOST => 0,
    // CURLOPT_SSL_VERIFYPEER => 0,

  ));

  // $response = json_decode(curl_exec($curl));
  $response = curl_exec($curl);

  curl_close($curl);
  echo $response;
}
