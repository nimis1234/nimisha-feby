<?php
class Tips_model extends CI_Model {

public function healthtips()
{
	$this->db->select('*');
	$this->db->from('healthtips');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
/////////////////////////////////////
public function insert_document($register_array)
{
  $row =$this->db->insert('image',$register_array);
  return $row;
}
/////////////////////////////////////////////////////////
public function register_data($insert_array)
{ 
	$this->db->insert('healthtips',$insert_array); 
	$insert_id = $this->db->insert_id(); 
	return $insert_id; 
}
////////////////////////////////////////////////////////////
public function view_list($id)
{
	$this->db->select('*');
	$this->db->from('healthtips');
	$this->db->where('healthtips.tip_id',$id);
	//$this->db->join('image','image.tip_id=healthtips.tip_id');
	$query=$this->db->get();
    $result=$query->result_array();
    return $result;
}

////////////////////////////////////////////////////////////
public function image_list($id)
{
	$this->db->select('*');
	$this->db->from('image');
	$this->db->where('image.tip_id',$id);
	//$this->db->join('image','image.tip_id=healthtips.tip_id');
	$query=$this->db->get();
    $result=$query->result_array();
    return $result;
}
//////////////////////////////////////////////////////////////
public function edit_list($id)
{
	$this->db->select('*');
	$this->db->from('healthtips');
	$this->db->where('healthtips.tip_id',$id);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////
public function image_edit($id)
{
	$this->db->select('*');
	$this->db->from('image');
	$this->db->where('image.tip_id',$id);
	$query=$this->db->get();
    $result=$query->result_array();
    return $result;
}

//////////////////////////////////////////////////////////////////////////
public function edit_data($edit_array,$id)
{
   $row=$this->db->update('healthtips',$edit_array,array('healthtips.tip_id'=>$id));
   return $row;    
}
///////////////////////////////////////////////////////////////////////////
public function  add_document($add_array)
{
	$row =$this->db->insert('image',$add_array);
    return $row;
}
/////////////////////////////////////////////////////////////////////////////////
public function delete_image($id)
{
	$this->db->where('image.img_id',$id);
	$res=$this->db->delete('image');
	return $res;
}
////////////////////////////////////////////////////////////////////////////////////////
public function remove_list($id)
{
	$this->db->where('tip_id',$id);
	$res=$this->db->delete('healthtips');
	return $res;
}

}