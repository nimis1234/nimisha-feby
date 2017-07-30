<?php
class User_model extends CI_Model {
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
    $this->db->select('admins.name,admins.profile_pic,admins.admin_id,admins.username,admins.email,admins.password,admins.timestamp,usertype.usertype');
    $this->db->from('admins');
    $this->db->join('usertype','usertype.usertype_id=admins.userstype');
   // $this->db->order_by('register_form.id','ASC');
    $query = $this->db->get();
    $row = $query->result_array();
    return $row; 
  }
  //////////////////////////////////////////////////////////////////////
  public function usertype_list()
  {
    $this->db->select('*');
    $this->db->from('usertype');
    $query = $this->db->get();
    $row = $query->result_array();
    return $row;
  }
  /////////////////////////////////////////////////
  public function register_data($register_array)
  {
     $row =$this->db->insert('admins',$register_array);
     return $row;
  }
//////////////////////////////////////////////////////////////////////
  public function update_form($id)
  {
     $this->db->select('*');
     $this->db->from('admins');
     $this->db->where('admin_id',$id);
     $query = $this->db->get();
     $row = $query->result_array();
     return $row;

  }
  ///////////////////////////////////////////////////////////////
  public function update_data($update_array,$id)
  {
    $row=$this->db->update('admins',$update_array,array('admin_id'=>$id));
    return $row;    
  }
  //////////////////////////////////////////////////////////////////
  public function delete_list($id)
  {
    $this->db->where('admin_id',$id);
    $row=$this->db->delete('admins');
    return $row;
  }
  ////////////////////////////////////////////////////////////////////////////////
  public function view_list($id)
  {
    $this->db->select('admins.name,admins.profile_pic,admins.admin_id,admins.username,admins.email,admins.password,admins.timestamp,usertype.usertype');
    $this->db->from('admins');
    $this->db->where('admin_id',$id);
    $this->db->join('usertype','usertype.usertype_id=admins.userstype');
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;
  }
}