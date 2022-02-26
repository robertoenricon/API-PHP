
<?php

$user = isset($_POST['user']) ? $_POST['user'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if (empty($user) || empty($pass)) {
  echo json_encode(array(
    'type' => false,
    'msg' => "Obrigátorio preencher os campos",
  ));
}

$json_data = json_decode(file_get_contents('logs/cadastro.json'));

foreach ($json_data as $key => $object) {
  foreach ($object as $val) {

    if ($val->user == $user && $val->pass == $pass) {

      echo json_encode(array(
        'type' => true,
        'msg' => "Login efetuado!",
      ));
      return false;
    }
  }
}
