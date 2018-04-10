<?php
class Sliders extends CI_Controller{
  public function index(){
     $data['sliders'] = $this->slider_model->get_all_sliders();
     $data['title']   = "All Sliders";

     $this->load->view('templates/admin/header',$data);
     $this->load->view('sliders/index',$data);
     $this->load->view('templates/admin/footer');
  }
  public function create(){
   
    $this->form_validation->set_rules('name','Slider Name','required');
    $this->form_validation->set_rules('heading','Slider heading','required');
    $this->form_validation->set_rules('caption','Slider caption','required');
    if($this->form_validation->run()  === FALSE){
      $data['title']   = "All Sliders";

      $this->load->view('templates/admin/header',$data);
      $this->load->view('sliders/create');
      $this->load->view('templates/admin/footer');
    }else{
      //image upload
      $config['upload_path']      = './assets/images/slider';
      $config['allowed_types']    = 'gif|jpg|png|jpeg';
      $config['max_size']         = '10000';
      $config['max_width']        = '3024';
      $config['max_height']       = '3024';
      
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload()){
        $errors   = array('error' => $this->upload->display_errors());
        $post_image = 'noimage.jpg';

      }else{
        $data = array('upload_data' =>  $this->upload->data());
        $post_image = $_FILES['userfile']['name'];

      }
      
      $this->slider_model->add_slider($post_image);
      redirect('sliders/index');
    }
  }
  //delete
  
  public function delete($id){
    $this->slider_model->delete($id);
    redirect('sliders/index');
  }
  public function edit($id){
    $this->form_validation->set_rules('name','Slider Name','required');
    $this->form_validation->set_rules('heading','Slider heading','required');
    $this->form_validation->set_rules('caption','Slider caption','required');
    if($this->form_validation->run()  === FALSE){
      $data['sliders']  = $this->slider_model->get_slider($id);
      $data['title']    = 'edit Slider';
      
      $this->load->view('templates/admin/header',$data);
      $this->load->view('sliders/edit',$data);
      $this->load->view('templates/admin/footer');
    }else{
      //image upload
      $config['upload_path']      = './assets/images/slider';
      $config['allowed_types']    = 'gif|jpg|png|jpeg';
      $config['max_size']         = '5000';
      $config['max_width']        = '2024';
      $config['max_height']       = '2024';

      $this->load->library('upload', $config);
      if(!$this->upload->do_upload()){
        $errors   = array('error' => $this->upload->display_errors());
        $post_image = 'noimage.jpg';

      }else{
        $data = array('upload_data' =>  $this->upload->data());
        $post_image = $_FILES['userfile']['name'];

      }
      $this->slider_model->update($post_image);
      redirect('sliders/index');
    }
    
  }
}
