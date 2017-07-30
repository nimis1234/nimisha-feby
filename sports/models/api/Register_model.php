<?php
class Register_model extends CI_Model {

public function users_list()
{
	$this->db->select('*');
	$this->db->from('app_users');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////
function insert_data($insert_array)
{ 
  $this->db->insert('app_users', $insert_array); 
  return $this->db->insert_id();
}
///////////////////////////////////////////////////////  
public function login_check($email_id,$password)
{
  $this->db->select('users_id,profile_pic,name');
  $this->db->from('app_users');
  $this->db->where(array('email_id'=>$email_id,'password'=>$password));
  $query=$this->db->get();
  $row=$query->row();
  return $row;
}
/////////////////////////////////////////////////////////////////////////
public function device_update($update_array,$id)
{
	$row=$this->db->update('app_users',$update_array,array('users_id'=>$id));
    return $row;    
}
///////////////////////////////////////////////////////////////////////////////
public function edit_list($id)
{
	$this->db->select('profile_pic,name,email_id,mobile_no,address');
	$this->db->from('app_users');
	$this->db->where('users_id',$id);
	$query=$this->db->get();
	$row=$query->row();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////
public function update_data($update_array,$id)
{
	$row=$this->db->update('app_users',$update_array,array('users_id'=>$id));
    return $row;    
}
/////////////////////////////////////////////////////////////////////////////////



}
