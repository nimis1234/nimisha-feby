<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Service_model extends CI_Model 
 {

   public function service_list()
    {
    	$this->db->select('*');
    	$this->db->from('services');
    	$this->db->join('categories','                                  categories.category_id=services.category_id');
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
    }
   public function select_categories()
    {
    	$this->db->select('*');
    	$this->db->from('categories');
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
    }
   public function add_service($insert_array)
    {
        $result=$this->db->insert('services',$insert_array);
        return $result;
    }
   public function specific_service($id)
    {
        $this->db->select('*');
    	$this->db->from('services');
    	$this->db->join('categories','                                  categories.category_id=services.category_id');
    	$this->db->where(array("services.service_id"=>$id));
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;	
    }
   public function update_service($update_array,$id)
    {
    	$row=$this->db->update('services',$update_array,array('service_id'=>$id));
    	return $row;
    }
   public function remove_service($id)
    {
	   	$this->db->where('service_id',$id);
	    $row=$this->db->delete('services');
	    return $row;
    }
 }