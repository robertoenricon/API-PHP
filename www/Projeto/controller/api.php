<?php

require_once('class/api.class.php');

new api();

$action = isset($_POST['action']) ? $_POST['action'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$expired = isset($_POST['expired']) ? $_POST['expired'] : '';

switch ($action) {

  case 'setCookie':
    $url = 'http://localhost/Projeto/controller/cookie.php?api=1';

    $parameters   = array(
      'name' => $name,
      'tipo' => $tipo,
      'expired' => $expired,
    );
    break;

  default:
    break;
}

$curl = curl_init();

$parameters = array(
  'name' => $name,
  'tipo' => $tipo,
  'expired' => $expired,
);

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
