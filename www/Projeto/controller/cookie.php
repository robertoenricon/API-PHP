<?php

if (isset($_GET['json']) && $_GET['json'] == '1') {
  $_POST = json_decode(file_get_contents("php://input"), true);
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$expired = isset($_POST['expired']) ? $_POST['expired'] : false;

if (isset($_COOKIE[$name])) {
  setcookie($_COOKIE[$name], '', time() - 3600);
}

if ($tipo == '1') {
  $value = "10";
} else if ($tipo == '2') {
  $value = "35";
} else if ($tipo == '3') {
  $value = "65";
} else if ($tipo == '4') {
  $value = "90";
}

echo json_encode(array(
  'name' => $name,
  'value' => $value,
  'tipo' => $tipo,
  'expired' => $expired,
));
