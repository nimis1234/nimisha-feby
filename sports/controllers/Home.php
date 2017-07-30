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
             $this->load->model('Login_model');
             $this->load->model('User_model');
             $this->load->model('Brand_model');
             $this->load->model('Model_management');
             $this->load->model('Product_model');
             $this->load->model('Tips_model');
             $this->load->model('App_user_model');


        }
    /////////////////////////////////////////////////
	public function index()
	{
		if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		{
		//$this->load->view('common/Home');
		$data['app_user'] = count($this->App_user_model->users_list());
		$data['tips'] = count($this->Tips_model->healthtips());
		$data['product'] = count($this->Product_model->product_list());
		$data['model'] = count($this->Model_management->model_list());
		$data['brand'] = count($this->Brand_model->brand_list());
		$data['users'] = count($this->User_model->users_list());
			//print_r($data);exit;
		$data['content'] = $this->load->view('dashboard',$data, true);
        $this->load->view('common/layout',$data);
        }
        else
        {
        	redirect('Login');
        }
	}
	
}