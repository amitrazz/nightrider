<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller{
  public function admin_index(){
    $data['posts']  = $this->post_model->get_all_post();
    $data['title']  = "Latest Posts";
    
    $this->load->view('templates/admin/header',$data);
    $this->load->view('posts/admin_index',$data);
    $this->load->view('templates/admin/footer');
  }
  public function index(){
    $data['posts']  = $this->post_model->get_all_post();
    $data['title']  = "Latest Posts";
    
    $this->load->view('templates/front/header');
    $this->load->view('posts/index',$data);
    $this->load->view('templates/front/footer');
  }
  public function view($id){
    $data['post']  = $this->post_model->get_post($id);
    $data['title']  = "Latest Posts";
    
    $this->load->view('templates/front/header');
    $this->load->view('posts/view',$data);
    $this->load->view('templates/front/footer');
  }
  public function create(){
    $this->form_validation->set_rules('title','Post title','required');
    $this->form_validation->set_rules('body','Post Discription','required');
    if($this->form_validation->run()  === FALSE){
      $data['title']  = "Add Post";
      
      $this->load->view('templates/admin/header',$data);
      $this->load->view('posts/create',$data);
      $this->load->view('templates/admin/footer');
    }else{
      //image upload
      $config['upload_path'] = './assets/iamges/posts';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']     = '10000';
      $config['max_width']    = '2024';
      $config['max_height']   = '2024';
      
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload()){
        $errors   = array('error' => $this->upload->display_errors());
        $post_image = 'noimage.jpg';

      }else{
        $data = array('upload_data' =>  $this->upload->data());
        $post_image = $_FILES['userfile']['name'];

      }
      $this->post_model->create($post_image);
      redirect('posts/index');
    }
    
  }
  public function edit($id){
    $this->form_validation->set_rules('title','Post title','required');
    $this->form_validation->set_rules('body','Post Discription','required');
    if($this->form_validation->run()  === FALSE){
      $data['title']  = "Edit Post";
      $data['post']  = $this->post_model->get_post($id);
      
      $this->load->view('templates/admin/header',$data);
      $this->load->view('posts/edit',$data);
      $this->load->view('templates/admin/footer');
    }else{
        if($_FILES['userfile']['name']!= ''){
          //image upload
          $config['upload_path'] = './assets/images/posts';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size']     = '10000';
          $config['max_width']    = '2024';
          $config['max_height']   = '2024';
          
          $this->load->library('upload', $config);
          if(!$this->upload->do_upload()){
            $errors   = array('error' => $this->upload->display_errors());

          }else{
            $data = array('upload_data' =>  $this->upload->data());
            $post_image = $_FILES['userfile']['name'];
          }  
      }
      $this->post_model->update($post_image);
      redirect('admin/index');
    }
  }

  public function delete($id){
    $this->post_model->delete($id);
    redirect('posts/admin_index');
  }
}