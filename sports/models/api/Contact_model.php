<?php
class Contact_model extends CI_Model {

public function contact_list()
{
	$this->db->select('*');
	$this->db->from('contact');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////


}
















