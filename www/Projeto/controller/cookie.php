<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$expired = isset($_POST['expired']) ? $_POST['expired'] : false;

echo json_encode($_POST);

// if (isset($_COOKIE[$name])) {
//   unset($_COOKIE[$name]);
//   setcookie($name, '', time() - 3600);
// }

// if ($tipo == '1') {
//   $value = "10";
// } else if ($tipo == '2') {
//   $value = "45";
// } else if ($tipo == '3') {
//   $value = "65";
// } else if ($tipo == '4') {
//   $value = "90";
// }

// if (!empty($name) && !empty($tipo) && isset($value)) {
//   setcookie($name, $value, $expired);
//   echo json_encode("efdsfds");
// } else {
//   echo "22222";
// }
