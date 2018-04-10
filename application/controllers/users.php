<?php 
class Users extends CI_Controller{
  public function dashboard(){
    $this->load->view('templates/user/header');
    $this->load->view('users/dashboard');
    $this->load->view('templates/user/footer');
  }
  public function register(){
    $this->form_validation->set_rules('first_name','First Name','required');
    $this->form_validation->set_rules('last_name','Last Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('mobile','Mobile','required|min_length[10]|max_length[13]');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
    if ($this->form_validation->run() == FALSE){
      $this->load->view('templates/front/header');
      $this->load->view('users/register');
      $this->load->view('templates/front/footer');
    }else{
      //image upload
      $config['upload_path'] = './assets/image/users';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']     = '10000';
      $config['max_width'] = '5024';
      $config['max_height'] = '5024';
      
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('userfile')){
              $error = array('error' => $this->upload->display_errors());
              $profile_pic = 'user.png';
      }
      else{
              $data = array('upload_data' => $this->upload->data());
              $profile_pic = $_FILES['userfile']['name'];
      }
      $this->user_model->register($profile_pic);
      redirect('home');
    }  
  }
  //login controller
  public function login(){
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    if ($this->form_validation->run() == FALSE){
      $this->load->view('templates/front/header');
      $this->load->view('users/login');
      $this->load->view('templates/front/footer');
    }else{
      $this->user_model->login();
      redirect('home');
    }

  }
}