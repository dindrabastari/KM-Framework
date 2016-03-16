<?php
class Home extends Controller
{
  function __construct(){
    parent::__construct();
    $data_header = array(
      'title' => 'TEST TITLE'
    );
    $data = array(
      'content' => 'TEST CONTENT'
    );
    $this->view->render('template/header', $data_header);
    $this->view->render('main', $data);
    $this->view->render('template/footer');
  }
}
?>
