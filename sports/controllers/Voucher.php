<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

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
             $this->load->model('Voucher_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function gift_voucher()
    {
    	$data['result']=$this->Voucher_model->gift_list();
    	$data['content']=$this->load->view('voucher/voucher_list',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function add_voucher()
    {
    	$data['content']=$this->load->view('voucher/voucher_form','',true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function add_voucher_action()
    {
    		//print_r($_FILES);exit(); 
		if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/gift/";
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
			   
		    	$voucherimage=$image;
		        $price=$this->input->post('price');

		    	$add_array = array('voucher_img' => $voucherimage,
		    		               'price' => $price);
		        $result=$this->Voucher_model->add_data($add_array);

		    	if($result)
				{
				   
		           redirect('Voucher/gift_voucher');
				}
				else
				{
					redirect('Voucher/add_voucher');
				}
            }
    	
		}
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function update_voucher($id)
    {
    	$data['result']=$this->Voucher_model->update_list($id);
    	$data['content']=$this->load->view('voucher/voucher_update',$data,true);
    	$this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    public function update_action($id)
    {
    	//print_r($_FILES);exit;
     if(isset($_FILES['image']['name']) AND !empty($_FILES['image']['name']))
      {
    
    	if($_FILES['image']['error']==0)
    	{
		   $config['upload_path']   =   "Assets/images/gift/";
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
		    $voucherimage=$image;
		    $price=$this->input->post('price');

		    $update_array = array('voucher_img' => $voucherimage,
		    		              'price' => $price);
		    $result=$this->Voucher_model->update_data($update_array,$id);

		    	if($result)
				{
				   
		           redirect('Voucher/gift_voucher');
				}
				else
				{
					redirect('Voucher/update_voucher/'.$id);
				}
    }
    //////////////////////////////////////////////////////////////////////////////////////
    public function delete_voucher($id)
    {
       $result=$this->Voucher_model->delete_gift($id);
		if($result)
		{
		    redirect('Voucher/gift_voucher/'.$id);   
		}

    }
}