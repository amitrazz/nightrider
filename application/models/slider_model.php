<?php
  class Slider_model extends CI_Model{
    public function get_all_sliders(){
      $this->db->order_by('id','DESC');
      $query  = $this->db->get('sliders');
      return $query->result_array();
    }
    public function add_slider($post_image){
      $data = array(
        'name'        =>  $this->input->post('name'),
        'heading'     =>  $this->input->post('heading'),
        'caption'     =>  $this->input->post('caption'),
        'slider_image'=>  $post_image
      );
      return $this->db->insert('sliders',$data);
     
    }
    public function get_slider($id){
      $query = $this->db->get_where('sliders', array('id' => $id));
      return $query->result_array();

    }
    public function update($post_image){
      $data = array(
        'name'        =>  $this->input->post('name'),
        'heading'     =>  $this->input->post('heading'),
        'caption'     =>  $this->input->post('caption'),
        'slider_image'=>  $post_image
      );
      $this->db->where('id', $this->input->post('id'));
      return $this->db->update('sliders', $data);
    }
    public function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('sliders');
      return true;
    }
  }