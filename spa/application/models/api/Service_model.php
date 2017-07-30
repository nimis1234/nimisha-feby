<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Service_model extends CI_Model 
 {

   public function home_services_list()
    {
    	$this->db->select('*');
    	$this->db->from('services');
    	$this->db->join('categories','                                  categories.category_id=services.category_id');
      $this->db->where("services.type","home")->or_where("services.type","both");
    	$query=$this->db->get();
    	$result=$query->result_array();
   	  return $result;
    }
   public function shop_services_list()
    {
      $this->db->select('*');
      $this->db->from('services');
      $this->db->join('categories','                                  categories.category_id=services.category_id');
      $this->db->where("services.type","shop")->or_where("services.type","both");
      $query=$this->db->get();
      $result=$query->result_array();
      return $result;
    }

  public function cat_services($cat_id,$type)
    { 
      $this->db->select('service_id,service_image,service_name,service_price');
      $this->db->from('categories');
      $this->db->join('services','services.category_id=categories.category_id');
      $this->db->where("(type = '$type' OR type = 'both') AND services.category_id
       = '$cat_id'");


      //$this->db->where('type',$type)->or_where("services.type","both");
      
      /* $this->db->where('type',$type);
       $this->db->or_where('type','both');*/

    
      //$this->db->where('')
      /*$this->db->where('services.category_id',$cat_id);*/
      $query=$this->db->get();
      $result=$query->result_array();
      return $result;
    }
  public function get_service($service_id)
    {
      $this->db->select('service_name,service_image,service_price,service_description');
      $this->db->from('services');
      $this->db->where(array("service_id"=>$service_id));
      $query=$this->db->get();
      $row=$query->result_array();
      return $row;
    }

  }
  