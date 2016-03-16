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
    $this->load->view('template/header', $data_header);
    $this->load->view('main', $data);
    $this->load->view('template/footer');
  }
}
?>
