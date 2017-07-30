<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

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
             $this->load->model('Brand_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function brand_list()
    {
    	$data['result'] = $this->Brand_model->brand_list();
    	$data['content'] = $this->load->view('product/brand_list',$data, true);
        $this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_brand()
    {
    	//$data['result'] = $this->User_model->usertype_list();
		$data['content'] = $this->load->view('product/add_brand_form','',true);
		$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_brand_action()
    { 
    	
			//print_r($_FILES);exit(); 
		if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/brand/";
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
			    $brandname=$this->input->post('brandname');
		    	$brandimage=$image;
		        $description=$this->input->post('description');

		    	$add_array = array('brandname' => $brandname,
		    		               'brand_img' => $brandimage,
		    		               'brand_des' => $description);
		        $result=$this->Brand_model->add_data($add_array);

		    	if($result)
				{
				   
		           redirect('Brand/brand_list');
				}
				else
				{
					redirect('Brand/add_brand');
				}
            }
    	
		}
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function brand_view($id)
    {   
    	$data['view'] = $this->Brand_model->view_list($id);
    	$data['content'] = $this->load->view('product/brand_view',$data,true);
    	$this->load->view('common/layout',$data);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    public function brand_edit($id)
    {
    	$data['res'] = $this->Brand_model->edit_list($id);
    //print_r($data);exit;
    	$data['content'] = $this->load->view('product/brand_edit',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
    public function edit_action($id)
    {
    	//print_r($_FILES);exit;
     if(isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
      {
    
    	if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/brand/";
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
	}else{
			$image=$this->input->post('old');
		}
		    $brandname=$this->input->post('brandname');
		    $brandimage=$image;
		    $description=$this->input->post('description');

		    $edit_array = array('brandname' => $brandname,
		    		            'brand_img' => $brandimage,
		    		            'brand_des' => $description);
		    $result=$this->Brand_model->edit_data($edit_array,$id);

		    	if($result)
				{
				   
		           redirect('Brand/brand_list');
				}
				else
				{
					redirect('Brand/brand_edit/'.$id);
				}
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
    public function brand_remove($id)
    {
    	$result=$this->Brand_model->remove_list($id);
		if($result)
		{
		    redirect('Brand/brand_list/'.$id);   
		}
	   
    }
}
