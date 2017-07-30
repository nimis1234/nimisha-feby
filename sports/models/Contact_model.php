<?php
class Contact_model extends CI_Model {

public function contact_list()
{
	$this->db->select('*');
	$this->db->from('contact');
	$query=$this->db->get();
	$row=$query->result_array();
	return $row;
}
////////////////////////////////////////////
public function register_data($register_array)
{
	 $row =$this->db->insert('contact',$register_array);
     return $row;
}
//////////////////////////////////////////////////////////////
public function update_form($id)
{
   $this->db->select('*');
   $this->db->from('contact');
   $this->db->where('contact_id',$id);
   $query = $this->db->get();
   $row = $query->result_array();
   return $row;

}
/////////////////////////////////////////////////////////////
public function update_data($update_array,$id)
{
   $row=$this->db->update('contact',$update_array,array('contact_id'=>$id));
   return $row;    
}
///////////////////////////////////////////////////////////////////////////////
public function delete_list($id)
  {
    $this->db->where('contact_id',$id);
    $row=$this->db->delete('contact');
    return $row;
  }
}