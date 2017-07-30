<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model 
{
  
  public function add_user($userdata)
  {
  	$result=$this->db->insert('users',$userdata);
  	return $result;
  }
  public function select_users()
  {
  	$this->db->select('users.user_id,users.name,users.email,user_types.user_type_name,users.image');
  	$this->db->from('users');
    $this->db->join('user_types','user_types.user_type_id=users.user_type');
  	$query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
  public function specific_user($user_id)
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('user_id',$user_id);
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
  public function view_specific_user($user_id)
  {
    $this->db->select('users.name,users.email,user_types.user_type_name,users.image');
    $this->db->from('users');
    $this->db->join('user_types','user_types.user_type_id=users.user_type');
    $this->db->where('user_id',$user_id);
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
  public function select_user_types()
  {
    $this->db->select('*');
    $this->db->from('user_types');
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
  
  public function update_user($update_array,$id)
  {
    $row=$this->db->update('users',$update_array,array('user_id'=>$id));
    return $row;
  }

  public function delete_user($user_id)
  {
    $this->db->where('user_id',$user_id);
    $row=$this->db->delete('users');
    return $row;
  }
	
}