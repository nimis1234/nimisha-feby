<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model 
{

	public function check_user($login_array)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($login_array);
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	public function user_name($email,$password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('email' =>$email,'password' =>$password ));
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
}