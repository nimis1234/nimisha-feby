<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category_model extends CI_Model 
{
  public function category_list()
   {
   	 $this->db->select('*');
   	 $this->db->from('categories');
   	 $query=$this->db->get();
   	 $result=$query->result_array();
   	 return $result;
   }
   public function add_category($insert_array)
    {
      $row=$this->db->insert('categories',$insert_array);
      return $row;
    }
   public function remove_category($id)
    {
   	$this->db->where('category_id',$id);
    $row=$this->db->delete('categories');
    return $row;
    }
   public function specific_category($id)
    {
   	 $this->db->select('*');
   	 $this->db->from('categories');
   	 $this->db->where('category_id',$id);
   	 $query=$this->db->get();
   	 $result=$query->result_array();
   	 return $result;
    }
   public function update_category($update_array,$id)
    {
       $row=$this->db->update('categories',$update_array,array('category_id'=>$id));
       return $row;
    }
}

