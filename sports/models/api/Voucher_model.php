<?php
class Voucher_model extends CI_Model {

public function voucher_list($start_rate="",$end_rate="")
{
	$this->db->select('*');
	$this->db->from('voucher');
	if ($from_rate!="" && $to_rate!="")
	{
	$this->db->where('price >=', $start_rate);
	$this->db->where('price <=', $end_rate);
    }
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;

}
//////////////////////////////////////////////////////////////////////////////////////////////
}