<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
             $this->load->model('User_model');
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
    public function user_information()
	{
		$data['result'] = $this->User_model->users_list();
		$data['content'] = $this->load->view('users/add_users_table',$data, true);
        $this->load->view('common/layout',$data);
        
	}
	///////////////////////////////////////////////////////////////////////////////

	public function add_user()
	{ 
		
		$data['result'] = $this->User_model->usertype_list();
		$data['content'] = $this->load->view('users/add_users_form',$data,true);
		$this->load->view('common/layout',$data);
	   
	}
	/////////////////////////////////////////////////////////////////////////////////
	public function add_user_action()
	{
			//print_r($_FILES);exit(); 
		if($_FILES['profile_pic']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/user/";
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

	    $profile_pic=$image;
		$name=$this->input->post('name');
		$username=$this->input->post('username');
		$email=$this->input->post('email');
		$usertype=$this->input->post('usertype');
		$password=$this->input->post('password');
		
		$register_array = array('profile_pic' => $profile_pic,
			                    'name' => $name,
							    'username' =>$username,
							    'email' =>$email,
							    'userstype' =>$usertype,
		                        'password' =>$password);
		$result=$this->User_model->register_data($register_array);

		if($result)
		{
           redirect('User/user_information');
		}
		else
		{
			redirect('User/add_user');
		}
	   }
	  }
	}
	//////////////////////////////////////////////////////////////////////////////////////////
	public function user_view($id)
	{ 
		
		$data['result'] = $this->User_model->view_list($id);
		$data['content'] = $this->load->view('users/user_view',$data,true);
    	$this->load->view('common/layout',$data);
        
	}
    //////////////////////////////////////////////////////////////////////////////////////////
    public function user_update($id)
    {
    	
    	$data['res'] = $this->User_model->update_form($id);
    	$data['result'] = $this->User_model->usertype_list();
    	$data['content'] = $this->load->view('users/user_update',$data,true);
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
		   $config['upload_path']   =   "Assets/images/user/";
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
		$profile_pic=$image;
    	$name=$this->input->post('name');
    	$username=$this->input->post('username');
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$usertype=$this->input->post('usertype');
    	$update_array = array('profile_pic' => $profile_pic,
    		                  'name' => $name,
							  'username' =>$username,
							  'email' =>$email,
							  'password' =>$password,
							  'userstype' =>$usertype );
    	
    		//print_r($update_array);exit;
    	$result=$this->User_model->update_data($update_array,$id);

		if($result)
		{
           redirect('User/user_information');
		}
		else
		{
			redirect('User/update_action');
		}
	

    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function user_delete($id)
    {
    	
    	$result=$this->User_model->delete_list($id);
		if($result)
		{
		    redirect('User/user_information/'.$id);   
		}
	   
	}
    
}