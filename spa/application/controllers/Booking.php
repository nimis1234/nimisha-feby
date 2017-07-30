<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  
  public function __construct()
    {
       parent::__construct();
       $this->load->model('Booking_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
    }
  public function booking_list()
    {

        $data['list']= $this->Booking_model->booking_list();
        $data['content']= $this->load->view('booking/booking_list',$data,true);
        $this->load->view('common/layout',$data);
     
    }

  public function view_booking($id)
    {
        $data['specific_booking']= $this->Booking_model->specific_booking($id);
        $data['content']= $this->load->view('booking/view_booking',$data,true);
        $this->load->view('common/layout',$data);
     
    }

 }