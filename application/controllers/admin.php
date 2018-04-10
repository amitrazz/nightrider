
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function index(){
    $data['title']  = "Dashbord";
    $this->load->view('templates/admin/header',$data);
    $this->load->view('templates/admin/footer');
  }
}