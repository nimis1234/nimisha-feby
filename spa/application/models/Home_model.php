<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home_model extends CI_Model {

	 public function count_bookings()
	 {
	   $this->db->select('*');
	   $this->db->from('booking');
	   $query=$this->db->get();
	   $norows=$query->num_rows();
	   return $norows; 
	 }

	 public function count_users()
	 {
	   $this->db->select('*');
	   $this->db->from('users');
	   $query=$this->db->get();
	   $norows=$query->num_rows();
	   return $norows; 
	 }

	 public function count_services()
	  {
	  	$this->db->select('*');
	  	$this->db->from('services');
	  	$query=$this->db->get();
	    $norows=$query->num_rows();
	    return $norows; 
	  }

	 public function count_categories()
	  {
	  	$this->db->select('*');
	  	$this->db->from('categories');
	  	$query=$this->db->get();
	    $norows=$query->num_rows();
	    return $norows; 
	  }
     public function get_contact_list()
      {
   	    $this->db->select('*');
    	$this->db->from('contacts');
    	$this->db->order_by('contact_id','desc');
    	$this->db->limit(5);
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
      } 
           





 }