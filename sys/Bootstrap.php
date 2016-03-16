<?php
/**
 *
 */
class Bootstrap
{

  function __construct()
  {
    $url = (isset($_GET['url'])) ? $_GET['url'] : null ;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    //print_r($url);


    $file = 'app/controllers/' . $url[0] . '.php';

    if (file_exists($file)) {
      require $file;
      $controller = new $url[0];
    }else{
      require 'app/controllers/error/NotFoundError.php';
      $controller = new NotFoundError;
      return false;
    }




    if (isset($url[2])) {
      $controller->{$url[1]}($url[2]);
    }else if (isset($url[1])) {
      $controller->{$url[1]}();
    }
  }
}

 ?>
