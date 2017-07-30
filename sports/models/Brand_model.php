<?php
class Brand_model extends CI_Model {

public function brand_list()
{
	$this->db->select('*');
	$this->db->from('brand');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
/////////////////////////////////////////////
public function add_data($add_array)
{
	 $row =$this->db->insert('brand',$add_array);
     return $row;
}
/////////////////////////////////////////////////////
public function view_list($id)
{
	$this->db->select('*');
	$this->db->from('brand');
	$this->db->where('brand_id',$id);
	$query=$this->db->get();
	$res=$query->result_array();
	return $res;
}
//////////////////////////////////////////////////////////
public function edit_list($id)
{
	$this->db->select('*');
	$this->db->from('brand');
	$this->db->where('brand_id',$id);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////
 public function remove_list($id)
  {
    $this->db->where('brand_id',$id);
    $row=$this->db->delete('brand');
    return $row;
  }
  /////////////////////////////////////////////////////////////
  public function edit_data($edit_array,$id)
  {
  	$row=$this->db->update('brand',$edit_array,array('brand_id'=>$id));
    return $row;    
  }
}





