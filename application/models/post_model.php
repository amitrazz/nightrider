<?php
 class Post_model extends CI_Model{
   public function get_all_post(){
     $this->db->order_by('id','DESC');
     $query = $this->db->get('posts');
     return $query->result_array();
   }
   public function get_all_post_limit(){
    $this->db->order_by('id','DESC');
    $this->db->limit(3);
    $query = $this->db->get('posts');
    return $query->result_array();
  }
  public function get_post($id){
    $query = $this->db->get_where('posts', array( 'id'  => $id));
    return $query->row_array();
  }
  public function create($post_image){
    $data = array(
      'title'            =>  $this->input->post('title'),
      'body'             =>  $this->input->post('body'),
      'post_image'       =>  $post_image
    );
    $this->db->insert('posts',$data);
    return true;
  }
  public function update($post_image){
    $data = array(
      'title'            =>  $this->input->post('title'),
      'body'             =>  $this->input->post('body'),
      'post_image'       =>  $post_image
    );
    
    $this->db->where('id', $this->input->post('id'));
    return  $this->db->update('posts',$data);
  }
  public function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('posts');
    return true;
  }
 }