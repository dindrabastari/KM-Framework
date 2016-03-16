<?php
/**
 *
 */
class View
{

  function __construct()
  {
  }

  public function render($name, $data = null)
  {
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
}

 ?>
