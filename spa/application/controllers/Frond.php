<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frond extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
       parent::__construct();
       $this->load->model('Service_model');
       $this->load->model('Voucher_model');
       $this->load->model('Gallery_model');
       $this->load->model('Contact_model');
       
   
    }

	public function index()
	{

	        $data['services'] = $this->Service_model->service_list();
	        $data['vouchers'] = $this->Voucher_model->get_voucher_list();
	        $data['images']   = $this->Gallery_model->get_images();
	        $this->load->view('Homepage/home',$data);
	}

	public function add_contact()
	 {
	 	$name         = $this->input->post('name');
        $contact_no   = $this->input->post('phoneno');
        $email        = $this->input->post('email');
        $message      = $this->input->post('message');

        $insert_array = array(
                               'contact_name' => $name,
                               'contact_no'   => $contact_no,
                               'email'        => $email,
                               'message'      => $message
                              );

        $result_insert = $this->Contact_model->insert_contact($insert_array);
        if($result_insert)
        {

        }
        else
        {
        	echo"message not insert succesfully";
        }
	 }

 }
