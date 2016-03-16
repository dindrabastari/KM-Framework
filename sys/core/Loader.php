<?php
/**
 *
 */
class Loader
{

  function __construct()
  {

  }

  function view($name, $data = null){
    if (is_array($data) || is_object($data)) {
      $data = (is_object($data)) ? get_object_vars($data) : $data;
      extract($data);
    } else {
      if ($data != null) {
        print_r(get_defined_vars());
      }
    }
    require 'app/views/' . $name . '.php';
  }

  function model($name, $db = FALSE){
    
  }

  function library($name){

  }

  function plugin($name){

  }

  function database(){

  }
}

 ?>
