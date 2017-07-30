<?php
class Tip_model extends CI_Model {

public function tips_list()
{
	$this->db->select('healthtips.tip_id,image.image,healthtips.tipname,healthtips.timestamp');
	$this->db->from('healthtips');
	$this->db->join('image','image.tip_id=healthtips.tip_id');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function tip_details($id)
{
	$this->db->select('healthtips.tipname,healthtips.timestamp,healthtips.tip_description');
	$this->db->from('healthtips');
	$this->db->where('tip_id',$id);
	$query=$this->db->get();
	$row=$query->row();
	return $row;
} 
}