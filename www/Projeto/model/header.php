<?php

if (isset($url) && $url == 'login') {
  require_once('controller/class/cfg.class.php');

  $css = new cssJs();
  $css = $css->css($url);
} else {
  require_once('../controller/class/cfg.class.php');
  require_once('../controller/class/cookie.class.php');
  require_once('../controller/api.php');

  $css = new cssJs();
  $css = $css->css(basename($_SERVER['PHP_SELF'], '.php'));
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo $css; ?>

  <title>Style Web Full - By Roberto Enrico</title>

</head>