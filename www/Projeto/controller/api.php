<?php

header('Content-Type: application/json');

$action = isset($_POST['action']) ? $_POST['action'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$expired = isset($_POST['expired']) ? $_POST['expired'] : '';

echo '<pre>';
print_r($_POST);
die();


$urls = [];

switch ($action) {

  case 'setCookie':
    $urls['cookie'] = 'http://localhost/Projeto/controller/cookie.php';
    // $urls['teste'] = 'http://localhost/Projeto/teste.php';

    $parameters   = array(
      'name' => $name,
      'tipo' => $tipo,
      'expired' => $expired,
    );
    break;

  default:
    break;
}

// $header = array(
//   'Content-Type: application/json'
// );

// // array of curl handles
// $multiCurl = array();
// // data to be returned
// $result = array();
// // multi handle
// $mh = curl_multi_init();

// foreach ($urls as $i => $url) {
//   // URL from which data will be fetched
//   $fetchURL = $url;
//   $multiCurl[$i] = curl_init();
//   curl_setopt($multiCurl[$i], CURLOPT_URL, $fetchURL);
//   curl_setopt($multiCurl[$i], CURLOPT_HEADER, 0);
//   curl_setopt($multiCurl[$i], CURLOPT_POST, true);
//   curl_setopt($multiCurl[$i], CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($multiCurl[$i], CURLOPT_POSTFIELDS, json_encode($parameters));
//   curl_setopt($multiCurl[$i], CURLOPT_HTTPHEADER, $header);
//   curl_multi_add_handle($mh, $multiCurl[$i]);
// }

// $index = null;
// do {
//   curl_multi_exec($mh, $index);
// } while ($index > 0);

// foreach ($multiCurl as $k => $ch) {

//   $result[trim($k)] = json_decode(curl_multi_getcontent($ch));
//   curl_multi_remove_handle($mh, $ch);
// }

// echo '<pre>';
// print_r($result);
// die();

// // close
// curl_multi_close($mh);

// echo json_encode($result);



$curl = curl_init();

$parameters = array(
  'name' => $name,
  'tipo' => $tipo,
  'expired' => $expired,
);

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/Projeto/controller/cookie.php",
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

  // CURLOPT_ENCODING => '',
  // CURLOPT_MAXREDIRS => 10,
  // CURLOPT_TIMEOUT => 0,
  // CURLOPT_FOLLOWLOCATION => true,
  // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
));

// $response = json_decode(curl_exec($curl));
$response = curl_exec($curl);

echo '<pre>';
print_r($response);
die();

curl_close($curl);
echo $response;
