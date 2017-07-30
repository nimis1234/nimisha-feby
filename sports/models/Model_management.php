<?php
class Model_management extends CI_Model {

public function model_list()
{
	$this->db->select('model.modelname,model.img,model.model_id,brand.brandname');
	$this->db->from('model');
	$this->db->join('brand','brand.brand_id=model.brand_id');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////////////////////////
public function brandname()
{
	$this->db->select('*');
	$this->db->from('brand');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
public function add_data($add_array)
{
	 $row =$this->db->insert('model',$add_array);
     return $row;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
public function view_list($id)
{
	$this->db->select('*');
	$this->db->from('model');
	$this->db->join('brand','brand.brand_id=model.brand_id');
	$this->db->where('model_id',$id);
	$query=$this->db->get();
	$res=$query->result_array();
	return $res;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function update_model($id)
{
	$this->db->select('*');
	$this->db->from('model');
	$this->db->join('brand','brand.brand_id=model.brand_id');
	$this->db->where('model_id',$id);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function edit_data($edit_array,$id)
  {
  	$row=$this->db->update('model',$edit_array,array('model_id'=>$id));
    return $row;    
  }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function delete_list($id)
{
	$this->db->where('model_id',$id);
	$row=$this->db->delete('model');
	return $row;
}
}