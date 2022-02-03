<?php

if (isset($_GET['api']) && $_GET['api'] == '1') {
  header('Content-Type: application/json');
  $_POST = json_decode(file_get_contents("php://input"), true);
}

header('Set-Cookie: yummy_cookie=choco; tasty_cookie=strawberry');
