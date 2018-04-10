<?php 
class User_model extends CI_model{
  public function register($profile_pic){
    $data = array(
      'first_name'  =>  $this->input->post('first_name'),
      'last_name'   =>  $this->input->post('last_name'),
      'email'       =>  $this->input->post('email'),
      'mobile'      =>  $this->input->post('mobile'),
      'username'    =>  $this->input->post('username'),
      'password'    =>  md5($this->input->post('password')),
      'image'       =>  $profile_pic
    );
    $this->db->insert('users',$data);
    return true;
  }
  //login model
  public function login(){

    $this->db->where('username', $this->input->post('username'));
    $this->db->where('password', md5($this->input->post('username')));
    $result = $this->db->get('users');
    if($result->num_rows() == 1 ){
      return $result->row(0)->id;
    }else{
      return FALSE;
    } 
  }
}