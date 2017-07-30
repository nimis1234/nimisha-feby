<?php
class Product_model extends CI_Model {

public function product_list($from_rate="",$to_rate="",$brand="",$model="")
{
	$this->db->select('product.product_id,product.product_img,product.productname,brand.brandname,model.modelname,product.price');
	$this->db->from('product');
	$this->db->join("brand","brand.brand_id=product.brand_id","left");
	$this->db->join("model","model.model_id=product.model_id","left");
	if ($from_rate!="" && $to_rate!="")
	{
	$this->db->where('price >=', $from_rate);
	$this->db->where('price <=', $to_rate);
    }
 	if($brand)
 	{
 		$this->db->where('product.brand_id', $brand);

 	}
 	if($model)
 	{
 		$this->db->where('product.model_id', $model);

 	}
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function brand_list()
{
	$this->db->select('brand.brand_id,brand.brandname');
	$this->db->from('brand');
	
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function model_list($brand)
{
	$this->db->select('model.model_id,model.modelname');
	$this->db->from('model');
	$this->db->where(array('brand_id'=>$brand));
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
}

