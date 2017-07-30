<?php
class App_user_model extends CI_Model {
  public function __construct()
   {
       parent::__construct();
   }
   ///////////////////////////////////
 /*  public function users_list()
  {
   
$this->db->select('*');
	$this->db->from('admins');

	$query = $this->db->get();
	$row = $query->result_array();
	return $row;
  
  }*/
  ////////////////////////////////////////////
  public function users_list()
  {
    $this->db->select('app_users.users_id,app_users.profile_pic,app_users.name,app_users.email_id');
    $this->db->from('app_users');
    $this->db->order_by('users_id','desc');
    $query = $this->db->get();
    $row = $query->result_array();
    return $row; 
  }
  //////////////////////////////////////////////////////////////////////////////////
  public function register_data($register_array)
  {
     $row =$this->db->insert('app_users',$register_array);
     return $row;
  }
  /////////////////////////////////////////////////////////
  public function update_form($id)
  {
     $this->db->select('*');
     $this->db->from('app_users');
     $this->db->where('users_id',$id);
     $query = $this->db->get();
     $row = $query->result_array();
     return $row;

  }
  ///////////////////////////////////////////////////////////////
  public function update_data($update_array,$id)
  {
    $row=$this->db->update('app_users',$update_array,array('users_id'=>$id));
    return $row;    
  }
  //////////////////////////////////////////////////////////////////
  public function delete_list($id)
  {
    $this->db->where('users_id',$id);
    $row=$this->db->delete('app_users');
    return $row;
  }
  ////////////////////////////////////////////////////////////////////////////////
  public function view_list($id)
  {
    $this->db->select('*');
    $this->db->from('app_users');
    $this->db->where('app_users.users_id',$id);
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
}