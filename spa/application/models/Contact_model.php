<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class contact_model extends CI_Model {

  public function get_contact_list()
   {
   	    $this->db->select('*');
    	$this->db->from('contacts');
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
   }
   
  public function specific_contact($id)
   {
   	    $this->db->select('*');
    	$this->db->from('contacts');
    	$this->db->where(array("contact_id"=>$id));
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;	
   }

    public function insert_contact($insert_array)
   {
      $result_insert= $this->db->insert('contacts',$insert_array);
      $insert_id = $this->db->insert_id(); 
      return $insert_id;
   }



}







