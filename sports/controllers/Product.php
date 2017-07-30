<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
             $this->load->model('Product_model');
             $this->load->model('Brand_model');
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
    public function product_list()
    {
    	$data['result'] = $this->Product_model->product_list();
    	$data['content'] = $this->load->view('product/product_list',$data,true);
    	$this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_product()
    {
    	$data['brand'] = $this->Brand_model->brand_list();

    	$data['result'] = $this->Product_model->product_list();
    	$data['content'] = $this->load->view('product/add_product',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function get_models()
    {
    	$brand =$this->input->post('brand');
		$data['models_list']  =$this->Product_model->get_catmodel($brand);
		//$data['sports'] =$this->reports_model->get_sports($venue);
		//echo "<pre>";print_r($data);exit();   
		if ($data)
		 {
		echo json_encode($data);
          }

        
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_product_action()
    {
    	if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/product/";
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
			    $productname=$this->input->post('productname');
			    $modelname=$this->input->post('modelname');
		    	$productimage=$image;
		    	$brandname=$this->input->post('brandname');
		    	$description=$this->input->post('description');
		    	$price=$this->input->post('price');
		        

		    	$add_array = array('productname' => $productname,
		    		               'product_img' => $productimage,
		    		               'brand_id' => $brandname,
		    		               'model_id' => $modelname,
		    		               'pro_description' => $description,
		    		               'price' => $price);
		    		               
		        $result=$this->Product_model->add_data($add_array);

		    	if($result)
				{
				   
		           redirect('Product/product_list');
				}
				else
				{
					redirect('Product/add_product');
				}
            }
    	
		}
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function product_view($id)
    {
    	$data['view'] = $this->Product_model->view_list($id);
    	$data['content'] = $this->load->view('product/product_view',$data,true);
    	$this->load->view('common/layout',$data);
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function product_update($id)
    {
    	$data['brand'] = $this->Model_management->brandname();
    	$data['update'] = $this->Product_model->product_update($id);
    	$data['content'] = $this->load->view('product/product_update',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////
   public function update_action($id)
   {
   		if(isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
      {
    
    	if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/product/";
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
		    $productname=$this->input->post('productname');
		    $brandname=$this->input->post('brandname');
		    $productimage=$image;
		    $modelname=$this->input->post('modelname');
		    $description=$this->input->post('description');
		    $price=$this->input->post('price');

		    $update_array = array('productname' => $productname,
		    	                'model_id' => $modelname,
		    		            'product_img' => $productimage,
		    		            'brand_id' => $brandname,
		    		            'pro_description' => $description,
		    		            'price' => $price);
		    $result=$this->Product_model->update_data($update_array,$id);

		    	if($result)
				{
				   
		           redirect('Product/product_list');
				}
				else
				{
					redirect('Product/product_update/'.$id);
				}
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    public function product_delete($id)
    {
    	$result=$this->Product_model->delete_list($id);
        if($result)
        {
        	redirect('Product/product_list/'.$id);
        }
    }
   

}