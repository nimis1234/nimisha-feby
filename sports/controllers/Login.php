<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        }
    /////////////////////////////////////////////////
	public function index()
	{
		$this->load->view('login/login');
	}
	/////////////////////////////////////////////////
	public function login_action()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		//print_r($this->input->post());exit;
		$result=$this->Login_model->login_check($username,$password);
		
		if($result)
		{
			$res =$this->Login_model->user_name($username,$password);
			foreach ($res as  $value) 
			{
				$name=$value['name'];
				$profile_pic=$value['profile_pic'];
			}
		$newdata = array(
       
			         'username' => $username,
			         'password' => $password,
			         'name'	=> $name,
			         'profile_pic' => $profile_pic,
			         'logged_in' => TRUE);

		 $this->session->set_userdata($newdata);
		 //print_r($_SESSION);exit;
		 redirect('Home');
		}
		else
		{
			redirect('Login');
		}

	}
	///////////////////////////////////////////////////////////////////////////////
	public function logout()
	{
		$userdata=array('username','password','logged_in');
		$this->session->unset_userdata($userdata);
		redirect('Login');

	}
}
