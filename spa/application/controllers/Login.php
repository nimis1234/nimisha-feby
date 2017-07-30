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

	public function index()
	{
		 if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
         {
           redirect('Home');
         } 
     else
         {   
           $this->load->view('login/login');
         }
	}
	public function login_action()
	{
       $email=$this->input->post('email');
       $password=$this->input->post('password');
       $login_array= array('email' =>$email ,
       	                'password'=>$password);

       $result=$this->Login_model->check_user($login_array);
       
       if($result)
        {
           $row=$this->Login_model->user_name($email,$password);
           foreach ($row as $value) 
           {
           	$name=$value['name'];
            $user_id=$value['user_id'];
            $image=$value['image'];
           }
           $userdata= array('email'     =>$email, 
                            'user_id'   =>$user_id,
                            'image'     =>$image,
                            'password'  =>$password,
                            'name'      =>$name,
                            'logged_in' =>TRUE
           	               );
           $this->session->set_userdata($userdata);
           redirect('Home');
        }
        else
        {
        	redirect('Login');
        }

	}
    public function logout()
    {
        $array_items = array('email','user_id','image','password','name','logged_in');
    	$this->session->unset_userdata($array_items);
    	redirect('Login');
    }

}
?>