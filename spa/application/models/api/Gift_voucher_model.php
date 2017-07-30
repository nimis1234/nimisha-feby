<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Gift_voucher_model extends CI_Model {

	public function get_voucher_list()

	   {
	   	    $this->db->select('gift_id,gift_name,gift_image,gift_price');
	    	$this->db->from('giftvouchers');
	    	$query=$this->db->get();
	    	$result=$query->result_array();
	   	    return $result;
	   }

	public function view_voucher($voucher_id)
	   
	   { 
	   	    $this->db->select('gift_name,gift_image,gift_price,gift_description');
	    	$this->db->from('giftvouchers');
	    	$this->db->where(array('gift_id'=>$voucher_id));
	    	$query=$this->db->get();
	    	$row=$query->result_array();
	   	    return $row;


	   }

	public function order_gift($insert_array)

	   {
          $result= $this->db->insert('gift_order',$insert_array);
          return $result;
	   }

}
