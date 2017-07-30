<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
  
  public function __construct()
    {
       parent::__construct();
       $this->load->model('Category_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
    }
  public function all_categories()
    {
    	$data['list']=$this->Category_model->category_list();
    	$data['content']=$this->load->view('category/category_list',$data, true);
    	$this->load->view('common/layout',$data);
    }
  public function add_category()
    {
    	$data['content']=$this->load->view('category/add_category','',true);
    	$this->load->view('common/layout',$data);
    }
  public function add_category_action()
    {
    	
    	if($_FILES['image']['error']==0){
		   $config['upload_path']   =   "assets/dist/img/categories/";
		   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		   //$config['max_size']      =   "5000";
		  // $config['max_width']     =   "1890";
		   //$config['max_height']    =   "490";
		  
		   $this->load->library('upload',$config);
		   $this->upload->initialize($config);
		   $image_name='image';
		   //print_r($image_name);exit(); 
		   if(!$this->upload->do_upload($image_name)) {
			   echo $this->upload->display_errors();exit();
		   }
		   else{
			   $data=array('upload_data'=>$this->upload->data());
			   $category_image=$data['upload_data']['file_name'];
			   $category_name=$this->input->post('name');
			   $result=$this->Category_model->add_category($insert_array=array('category_name'=>                        $category_name, 
                          'category_image'=>$category_image
			   	          ));
			   if($result)
			   	 {
			   	 	redirect('Category/all_categories');
			   	 }
			   	else
			   	 {
                   redirect('Category/add_category');
			   	 }
		   }
		}

    }
  public function edit_category($id)
    {
      $data['specific_category']=$this->Category_model->specific_category($id);
      $data['id']=$id;
      $data['content']=$this->load->view('category/update_category',$data,true);
      $this->load->view('common/layout',$data);
    }
  public function delete_category($id)
    {
    	$result=$this->Category_model->remove_category($id);
    	if($result)
    	{
    		redirect('Category/all_categories');
    	}
    }

   public function update_category_action($id)
    {
		if(isset($_FILES['image'] ['name']) AND !empty($_FILES['image'] ['name']))
           {      
			      if($_FILES['image']['error']==0)
			       {
					   $config['upload_path']   =   "assets/dist/img/categories/";
					   $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
					   //$config['max_size']      =   "5000";
					  // $config['max_width']     =   "1890";
					   //$config['max_height']    =   "490";
					  
					   $this->load->library('upload',$config);
					   $this->upload->initialize($config);
					   $image_name='image';
					   //print_r($image_name);exit(); 
					   if(!$this->upload->do_upload($image_name)) 
					      {
						    
						    echo $this->upload->display_errors();exit();
					       
					       }
					   else{

						   $data=array('upload_data'=>$this->upload->data());

						   $category_image=$data['upload_data']['file_name'];

						   $category_name=$this->input->post('name');

						   $result=$this->Category_model->update_category($update_array=
						   	array('category_name'=> $category_name, 
			                      'category_image'=>$category_image
						   	      ),$id);
						   if($result)
						   	 {
						   	 	redirect('Category/all_categories');
						   	 }
						   	else
						   	 {
			                   redirect('Category/update_category');
						   	 }
					   }
					}
			}
       else
          {
             
            $category_image=$this->input->post('image_old');
		      $category_name=$this->input->post('name');
		      $update_array=array(
		      	                 'category_name'=> $category_name, 
                                'category_image'=>$category_image
		   	                    );
		      
		    $result=$this->Category_model->update_category($update_array,$id);

		   if($result)
		   	 {
		   	 	redirect('Category/all_categories');
		   	 }
		   	else
		   	 {
                redirect('Category/update_category');
		   	 }

           }


    }
  }
?>
