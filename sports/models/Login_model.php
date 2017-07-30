<?php
class Login_model extends CI_Model {
  public function __construct()
   {
       parent::__construct();
   }
   //////////////////////////////////////
   public function login_check($username,$password)
   {
   	$this->db->select('*');
   	$this->db->from('admins');
   	$this->db->where(array('username'=>$username,'password'=>$password));
   	$query=$this->db->get();
   	$row=$query->result_array();
   	return $row;
   }
   ////////////////////////////////////////////////////////////////////////////////
   public function user_name($username,$password)
   {
    $this->db->select('name,profile_pic');
    $this->db->from('admins');
    $this->db->where(array('username' => $username,'password'=>$password));
    $query=$this->db->get();
    $row=$query->result_array();
    return $row;
   }
  

}