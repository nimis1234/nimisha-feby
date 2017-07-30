<?php
class About_model extends CI_Model {
public function about_data()
{
	$this->db->select('*');
	$this->db->from('aboutus');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////
public function add_data($add_array)
{
 	$row=$this->db->insert('aboutus',$add_array);
 	return $row;
}
///////////////////////////////////////////////////////
public function edit_list()
{
	$this->db->select('*');
	$this->db->from('aboutus');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////////////////////
public function edit_data($edit_array,$id)
{
	$row=$this->db->update('aboutus',$edit_array,array('about_id'=>$id));
    return $row;    
}
}