<?php

// extrai a informação do ficheiro
$valores = file_get_contents("logs/cadastro.json");

// faz o decode o json para uma variavel php que fica em array
$json = json_decode($valores, true);

//captura as informaçoes do json
$json_data = json_decode(file_get_contents('logs/cadastro.json'));
$result = [];

if ($json_data) {
  foreach ($json_data as $key => $object) {
    foreach ($object as $val) {
      unset($val->pass);
      $result[] = array(
        'user' => $val->user,
        'pass' => '****'
      );
    }
  }
}

if (!empty($result)) {
  echo json_encode(array(
    'type' => true,
    'data' => $result,
  ));
}
