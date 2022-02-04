<?php

class api
{

  public function __construct()
  {
    /**
     * Condicional responsável iniciar a chamada da API. No get da chamada da URL precisa informar api 
     *  
     * @var string $_POST
     * @author Roberto Enrico
     */
    if (isset($_GET['api']) && $_GET['api'] == '1') {
      // header('Content-Type: application/json');
      $_POST = json_decode(file_get_contents("php://input"), true);
    }
  }
}
