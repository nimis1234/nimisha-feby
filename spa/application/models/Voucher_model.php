<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Voucher_model extends CI_Model {

  public function get_voucher_list()

   {
   	  $this->db->select('*');
    	$this->db->from('giftvouchers');
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
   }

  public function specific_voucher($id)
   
    {
        $this->db->select('*');
    	$this->db->from('giftvouchers');
    	$this->db->where(array('gift_id'=>$id));
    	$query=$this->db->get();
    	$result=$query->result_array();
   	    return $result;
    }

  public function add_voucher($insert_array)
    {
        $result=$this->db->insert('giftvouchers',$insert_array);
        return $result;
    }

  public function update_voucher($update_array,$id)
    {
        $row=$this->db->update('giftvouchers',$update_array,array('gift_id'=>$id));
    	return $row;
    }
      

  public function delete_voucher($id)
    
    {
    	$this->db->where('gift_id',$id);
    	$row=$this->db->delete('giftvouchers');
    	return $row;
    }

  public function order_list()
    {
      $this->db->select('*');
      $this->db->from('gift_order');
      $this->db->join('giftvouchers','giftvouchers.gift_id=gift_order.voucher_id');
      $this->db->order_by('order_id','desc');
      $query=$this->db->get();
      $result=$query->result_array();
      return $result;
    }

  public function specific_order($id)
    {
       $this->db->select('*');
       $this->db->from('gift_order');
       $this->db->join('giftvouchers','giftvouchers.gift_id=gift_order.voucher_id');
       $this->db->where(array('order_id'=>$id));
       $query=$this->db->get();
       $result=$query->result_array();
       return $result;
    }



 }

?> 

