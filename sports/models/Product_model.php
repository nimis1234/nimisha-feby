<?php
class Product_model extends CI_Model {

public function product_list()
{
	$this->db->select('*');
	$this->db->from('product');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////////////////////////////////
public function specific_list()
{
	$this->db->select('*');
	$this->db->from('product');
	$this->db->join('brand','brand.brand_id=product.product_id');
	$this->db->join('model','model.model_id=product.product_id');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
/////////////////////////////////////////////////////////////////////////////////////
public function get_catmodel($brand)
{
	$this->db->select('*');
	$this->db->from('model');
	$this->db->where('brand_id',$brand);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
///////////////////////////////////////////////////////////////////////////////////////////
public function add_data($add_array)
{
	$row=$this->db->insert('product',$add_array);
	return $row;
}
/////////////////////////////////////////////////////////////////////////////////////////////////
public function view_list($id)
{
	$this->db->select('*');
	$this->db->from('product');
	$this->db->join('brand','brand.brand_id=product.product_id');
	$this->db->join('model','model.model_id=product.product_id');
	$this->db->where('product_id',$id);
	$query=$this->db->get();
	$res=$query->result_array();
	return $res;
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function product_update($id)
{
	$this->db->select('*');
	$this->db->from('product');
	$this->db->where('product_id',$id);
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////
public function update_data($update_array,$id)
{
	$row=$this->db->update('product',$update_array,array('product_id'=>$id));
    return $row;    
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
public function delete_list($id)
{
	$this->db->where('product_id',$id);
	$row=$this->db->delete('product');
	return $row;
}
}