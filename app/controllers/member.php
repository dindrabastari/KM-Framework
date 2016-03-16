<?php
/**
 *
 */
class Member extends Controller
{

  function __construct()
  {
    parent::__construct();
    echo '<br>We are in the Member Area';
  }

  public function test($params='')
  {
    echo '<br>Youre in test';
    echo '<br>with '.$params;
  }
}

 ?>
