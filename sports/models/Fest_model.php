<?php
class Fest_model extends CI_Model {

public function image_list()
{
	$this->db->select('*');
	$this->db->from('sportsfest');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////
public function add_images($insert_array)
{
	$row =$this->db->insert('sportsfest',$insert_array);
    return $row;
}
///////////////////////////////////////////////////////////////////////////////////////////////
public function delete_image($id)
{
	$this->db->where('fest_id',$id);
	$res=$this->db->delete('sportsfest');
	return $res;
}
}