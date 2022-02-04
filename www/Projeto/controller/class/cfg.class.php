<?php
class cssJs
{

  /**
   * Função responsável por retornar os arquivos CSS de cada pagina respectiva
   * 
   * @return string $css
   * @author Roberto Enrico
   */
  public function css(string $url = null)
  {
    $css = '
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
      <!-- CSS -->

    ';
    if ($url != 'login') {
      $css .= '
        <link href="../model/css/main.css" rel="stylesheet" type="text/css">
        <link href="../model/css/header.css" rel="stylesheet" type="text/css">
        <link href="../model/css/footer.css" rel="stylesheet" type="text/css">
      ';
    } else {
      $css .= '<link href="model/css/login.css" rel="stylesheet" type="text/css">';
    }

    return $css;
  }
  /**
   * Função responsável por retornar os arquivos JS de cada pagina respectiva
   * 
   * @return string $js
   * @author Roberto Enrico
   */
  public function js(string $url = null)
  {

    $js = '
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <!-- CDN JQUERY -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
      <!-- JS -->
    ';
    if ($url != 'login') {
      $js .= '
        <script src="../model/js/main.js"></script>
        <script src="../model/js/cfg.js"></script>
      ';
    } else {
      $js .= '<script src="model/js/login.js"></script>';
    }

    return $js;
  }
}
