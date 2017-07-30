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

    public function get_videos()
     {
     	$this->db->select('video_id,video_address,video_name');
     	$this->db->from('video_gallery');
     	$query=$this->db->get();
     	$result=$query->result_array();
     	return $result;
     }
    

 }