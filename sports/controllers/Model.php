<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {

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
             $this->load->model('Model_management');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function model_list()
    {
    	$data['result'] = $this->Model_management->model_list();
    	$data['content'] = $this->load->view('product/model_list',$data, true);
        $this->load->view('common/layout',$data);
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_model()
    {
    	$data['result'] = $this->Model_management->brandname();
    	$data['content'] = $this->load->view('product/add_model',$data,true);
    	$this->load->view('common/layout',$data);
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_model_action()
    {
    		//print_r($_FILES);exit(); 
		if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/model/";
		   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		   //$config['max_size']      =   "5000";
		   //$config['max_width']     =   "1890";
		   //$config['max_height']    =   "490";
		  
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $image_name='image';
		   //print_r($image_name);exit(); 
		   if(!$this->upload->do_upload($image_name)) {
			   echo $this->upload->display_errors();exit();
		   }
		   else
		   {
			   $data=array('upload_data'=>$this->upload->data());
			   $image=$data['upload_data']['file_name'];

			   //print_r($image);
			    $modelname=$this->input->post('modelname');
		    	$modelimage=$image;
		    	$brandname=$this->input->post('brandname');
		        

		    	$add_array = array('modelname' => $modelname,
		    		               'img' => $modelimage,
		    		               'brand_id' => $brandname);
		    		               
		        $result=$this->Model_management->add_data($add_array);

		    	if($result)
				{
				   
		           redirect('Model/model_list');
				}
				else
				{
					redirect('Model/model_list');
				}
            }
    	
		}
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function model_view($id)
    {
    	$data['view'] = $this->Model_management->view_list($id);
    	$data['content'] = $this->load->view('product/model_view',$data,true);
    	$this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function update_model($id)
    {
    	$data['brand'] = $this->Model_management->brandname();
    	$data['update'] = $this->Model_management->update_model($id);
    	$data['content'] = $this->load->view('product/update_model',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function update_action($id)
    {
    	if(isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
      {
    
    	if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/model/";
		   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		   //$config['max_size']      =   "5000";
		   //$config['max_width']     =   "1890";
		   //$config['max_height']    =   "490";
		  
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $image_name='image';
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
	}
	else
	{
			$image=$this->input->post('old');
		}
		    $brandname=$this->input->post('brandname');
		    $modelimage=$image;
		    $modelname=$this->input->post('modelname');

		    $edit_array = array('modelname' => $modelname,
		    		            'img' => $modelimage,
		    		            'brand_id' => $brandname);
		    $result=$this->Model_management->edit_data($edit_array,$id);

		    	if($result)
				{
				   
		           redirect('Model/model_list');
				}
				else
				{
					redirect('Model/update_model/'.$id);
				}
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete_model($id)
    {
    	$result=$this->Model_management->delete_list($id);
		if($result)
		{
		    redirect('Model/model_list/'.$id);   
		}
    	
    
    }
}