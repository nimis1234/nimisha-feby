<?php
class Voucher_model extends CI_Model {

public function gift_list()
{
	$this->db->select('*');
	$this->db->from('voucher');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////
public function add_data($add_array)
{
	$result = $this->db->insert('voucher',$add_array);
	return $result;
}
///////////////////////////////////////////////////////////
public function update_list($id)
{
	$this->db->select('*');
	$this->db->from('voucher');
	$this->db->where('voucher_id',$id);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////////////////////////////
public function update_data($update_array,$id)
{
  	$row=$this->db->update('voucher',$update_array,array('voucher_id'=>$id));
    return $row;    
}
//////////////////////////////////////////////////////////////////////////////////
public function delete_gift($id)
{
	$this->db->where('voucher_id',$id);
    $row=$this->db->delete('voucher');
    return $row;
}
}