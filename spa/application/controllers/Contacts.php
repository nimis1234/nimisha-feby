<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
  
  public function __construct()
    {
       parent::__construct();
       $this->load->model('Contact_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
    }

  public function contacts_list()
    {
      $data['list']=$this->Contact_model->get_contact_list();
      $data['content']=$this->load->view('contacts/contacts_list',$data,true);
      $this->load->view('common/layout',$data);

    }
  public function view_contact($id)
    {
      $data['specific_contact']=$this->Contact_model->specific_contact($id);
      $data['content']=$this->load->view('contacts/view_contact',$data,true);
      $this->load->view('common/layout',$data);
    }



 }