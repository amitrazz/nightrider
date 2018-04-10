
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
  public function index(){
    $data['sliders'] = $this->slider_model->get_all_sliders();
    $data['posts']  = $this->post_model->get_all_post_limit();
    $this->load->view('templates/front/header');
    $this->load->view('templates/front/slider',$data);
    $this->load->view('home',$data);
    $this->load->view('templates/front/footer');
  }

}