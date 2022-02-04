<?php

class cookie
{
  /**
   * Função responsável por retornar o COOKIE criado
   * 
   * @return array $cookieVal = valor do cookie
   * @return string $cookieType = tipo do cookie
   * @return array return_cookie -> contem os valores do cookie.
   * @author Roberto Enrico
   */
  public function get_cookie()
  {
    $return_cookie = [];

    if (isset($_COOKIE['cookieLayout'])) {

      $cookie = explode('=', $_COOKIE['cookieLayout']);

      $return_cookie = array(
        'cookieVal' => $cookie[0],
        'cookieType' => $cookie[1],
      );
    }

    return $return_cookie;
  }
}
