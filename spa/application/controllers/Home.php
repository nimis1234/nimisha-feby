<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
       $this->load->model('Home_model');
       $this->load->model('Contact_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
			
        }
        else
        {
          redirect('Login');
        }
   
    }

	public function index()
	{

			$data['nobookings'] = $this->Home_model->count_bookings();
			$data['noadminusers'] = $this->Home_model->count_users();
			$data['nocategories'] = $this->Home_model->count_categories();
			$data['noservices'] = $this->Home_model->count_services(); 
            $data['contact_list']=$this->Home_model->get_contact_list();
			$data['content'] = $this->load->view('dashborad',$data, true);
			//print_r($data['contact_list']);exit;
	        $this->load->view('common/layout',$data);
	}

	public function demo()
	 {
	 	$this->load->view('demo');
	 }



}
?>