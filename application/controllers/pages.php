<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Pages extends CI_controller{
    public function view ($page = 'index'){
      if(! file_exists(APPPATH. 'views/pages/'.$page. '.php')){
        show_404();
      }
      $this->load->view('templates/front/header');
      $this->load->view('pages/'.$page);
      $this->load->view('templates/front/footer');
  
    }
  
  }