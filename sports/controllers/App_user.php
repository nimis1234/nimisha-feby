<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_user extends CI_Controller {

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
             $this->load->model('App_user_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    ///////////////////////////////////////////////////
    public function index()
    { 

    	
    }
    ////////////////////////////////////////////////////
    public function app_users_list()
	{
		
		$data['result'] = $this->App_user_model->users_list();
		$data['content'] = $this->load->view('appusers/appusers_list',$data, true);
        $this->load->view('common/layout',$data);
        
	}
	///////////////////////////////////////////////////////////////////////////////

	public function add_app_users()
	{ 
		$data['content'] = $this->load->view('appusers/add_app_users','',true);
		$this->load->view('common/layout',$data);
	   
	}
	/////////////////////////////////////////////////////////////////////////////////
	public function add_user_action()
	{
			//print_r($_FILES);exit(); 
		if($_FILES['profile_pic']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/appuser/";
		   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		   //$config['max_size']      =   "5000";
		   //$config['max_width']     =   "1890";
		   //$config['max_height']    =   "490";
		  
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $image_name='profile_pic';
		   //print_r($image_name);exit(); 
		   if(!$this->upload->do_upload($image_name)) {
			   echo $this->upload->display_errors();exit();
		   }
		   else
		   {
			   $data=array('upload_data'=>$this->upload->data());
			   $image=$data['upload_data']['file_name'];

			   //print_r($image);
		$name=$this->input->post('name');
		$profile_pic=$image;
		$email_id=$this->input->post('email_id');
		$password=$this->input->post('password');
		$mobile_no=$this->input->post('mobile_no');
		$address=$this->input->post('address');
		
		$register_array = array('name' => $name,
							  'profile_pic' =>$profile_pic,
							  'email_id' =>$email_id,
							  'mobile_no' =>$mobile_no,
		                      'password' =>$password,
							  'address' =>$address);
		$result=$this->App_user_model->register_data($register_array);

		if($result)
		{
           redirect('App_user/app_users_list');
		}
		else
		{
			redirect('App_user/add_app_users');
		}
	  }
	}
  }
  /////////////////////////////////////////////////////////////////////////////////////////
    public function user_view($id)
	{ 
		
		$data['result'] = $this->App_user_model->view_list($id);
		//print_r($data);exit();
		$data['content'] = $this->load->view('appusers/user_view',$data,true);
    	$this->load->view('common/layout',$data);
        
	}
    /////////////////////////////////////////////////////////////////////////////////////////
    public function user_update($id)
    {
    	
    	$data['result'] = $this->App_user_model->update_form($id);
    	$data['content'] = $this->load->view('appusers/user_update',$data,true);
    	$this->load->view('common/layout',$data);
       
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function update_action($id)
    {
    	//print_r($_FILES);exit;
     if(isset($_FILES['profile_pic']['name']) AND !empty($_FILES['profile_pic']['name']))
      {
    
    	if($_FILES['profile_pic']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/appuser/";
		   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		   //$config['max_size']      =   "5000";
		   //$config['max_width']     =   "1890";
		   //$config['max_height']    =   "490";
		  
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $image_name='profile_pic';
		   //print_r($image_name);exit(); 
		   if(!$this->upload->do_upload($image_name)) {
			   echo $this->upload->display_errors();exit();
		   }
		   else
		   {
		   $data=array('upload_data'=>$this->upload->data());
		   $image=$data['upload_data']['file_name'];
		  }
		}
	}else{
			$image=$this->input->post('old');
		}
    	$name=$this->input->post('name');
    	$profile_pic=$image;
    	$mobile_no=$this->input->post('mobile_no');
    	$email_id=$this->input->post('email_id');
    	$password=$this->input->post('password');
    	$address=$this->input->post('address');
    	$update_array = array('name' => $name,
    						  'profile_pic' => $profile_pic,
							  'mobile_no' => $mobile_no,
							  'email_id' => $email_id,
							  'password' => $password,
							  'address' => $address);
    	
    		//print_r($update_array);exit;
    	$result=$this->App_user_model->update_data($update_array,$id);

		if($result)
		{
           redirect('App_user/app_users_list');
		}
		else
		{
			redirect('App_user/update_action/'.$id);
		}
	

    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function user_delete($id)
    {
    	
    	$result=$this->App_user_model->delete_list($id);
		if($result)
		{
		    redirect('App_user/app_users_list/'.$id);   
		}
	   
	}
    
}