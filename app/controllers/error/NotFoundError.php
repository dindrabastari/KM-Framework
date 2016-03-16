<?php
/**
 *
 */
class NotFoundError extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->render('error/filenotfound');
  }
}

 ?>
