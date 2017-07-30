<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Gallery_model extends CI_Model 
 {
    public function get_images()
     {
     	$this->db->select('*');
     	$this->db->from('image_gallery');
     	$query=$this->db->get();
     	$result=$query->result_array();
     	return $result;
     }

    public function add_images($insert_array)
     {
     	$this->db->insert('image_gallery',$insert_array);
     } 
    public function specific_image($id)
     {
     	$this->db->select('*');
     	$this->db->from('image_gallery');
     	$this->db->where(array('image_id'=>$id));
     	$query=$this->db->get();
     	$result=$query->result_array();
     	return $result;
     }
    public function remove_image($id)
     {
     	$this->db->where('image_id',$id);
     	$row=$this->db->delete('image_gallery');
        return $row;
     }
    public function get_videos()
     {
     	$this->db->select('*');
     	$this->db->from('video_gallery');
     	$query=$this->db->get();
     	$result=$query->result_array();
     	return $result;
     }
    public function add_video($insert_array)
     {
     	$row=$this->db->insert('video_gallery',$insert_array);
     	return $row;
     } 
    public function specific_video($id)
     {
     	$this->db->select('*');
     	$this->db->from('video_gallery');
     	$this->db->where(array('video_id'=>$id));
     	$query=$this->db->get();
     	$result=$query->result_array();
     	return $result;
     }
    public function remove_video($id)
     {
     	$this->db->where('video_id',$id);
     	$row=$this->db->delete('video_gallery');
        return $row;
     }




 }