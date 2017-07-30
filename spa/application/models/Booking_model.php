<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Booking_model extends CI_Model {

   public function booking_list()
     {
     	$this->db->select('*');
    	$this->db->from('booking');
      $this->db->order_by('booking_id','desc');
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
     }

   public function specific_booking($id)
    {
        $this->db->select('*');
    	$this->db->from('booking');
    	$this->db->where(array("booking_id"=>$id));
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;	
    }


}
