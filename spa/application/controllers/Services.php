<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

   
    public function __construct()
     {
       parent::__construct();
       $this->load->model('Service_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
     }
    public function all_services()
     {
	      $data['list']= $this->Service_model->service_list();
	      $data['content']= $this->load->view('services/services_list',$data,true);
	      $this->load->view('common/layout',$data);
     }
    public function add_service()
     {
       $data['categories'] =$this->Service_model->select_categories();
      $data['content']=$this->load->view('services/add_service_form',$data,true);
      $this->load->view('common/layout',$data);
     }
    public function add_service_action()
     {
       if($_FILES['image']['error']==0)
     	{

		   $config['upload_path']   =   "assets/dist/img/services/";
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
			     $service_image=$data['upload_data']['file_name'];
     	         $service_name=$this->input->post('name');
     	         $description=$this->input->post('description');
     	         $price=$this->input->post('price');
     	         $category_id=$this->input->post('categories');
     	         $type=$this->input->post('type');
     	         $insert_array=array
     	                         (
     	       	                  'service_name'=>$service_name,
     	       	                  'service_description'=>$description,
     	       	                  'service_image'=>$service_image,
     	       	                  'service_price'=>$price,
     	       	                  'category_id'=>$category_id,
     	       	                  'type'=>$type
     	       	                  );

     	         $result=$this->Service_model->add_service($insert_array);

     	         if($result)
     	          {
                    redirect('Services/all_services');
     	          }
     	         else
     	          {
                     redirect('Services/add_service');
     	          }

     	        }
	    }
     }
    public function view_service($id)
     {
     	$data['specific_service']=$this->Service_model->specific_service($id);
        $data['content']=$this->load->view('services/view_service',$data,true);
        $this->load->view('common/layout',$data);

     }
    public function edit_service($id)
     {

      $data['specific_service']=$this->Service_model->specific_service($id);
      $data['categories'] =$this->Service_model->select_categories();
      $data['id']=$id;
      $data['content']=$this->load->view('services/update_service',$data,true);
      $this->load->view('common/layout',$data);

     }
    public function update_service_action($id)
     {
     	if(isset($_FILES['image'] ['name']) AND !empty($_FILES['image'] ['name']))
           {      
			      if($_FILES['image']['error']==0)
			       {
					   $config['upload_path']   =   "assets/dist/img/services/";
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

						   $service_image=$data['upload_data']['file_name'];

						   $service_name=$this->input->post('name');

						   $description=$this->input->post('description');

     	                   $price=$this->input->post('price');

     	                   $category_id=$this->input->post('categories');
     	                   $type=$this->input->post('type');

     	                   $update_array= array(
     	                   	      'service_name'=> $service_name,
     	                   	      'service_description'=>
     	                   	                $description,
			                      'service_image'=>$service_image,
			                      'service_price'=>$price,
			                      'category_id'=>$category_id,
     	                          'type'=>$type

						   	      );

						   $result=$this->Service_model->update_service($update_array,$id);
						   if($result)
						   	 {
						   	 	redirect('services/all_services');
						   	 }
						   	else
						   	 {
			                   redirect('services/edit_service/'.$id);
						   	 }
					   }
					}
			}
       else
          {
             
            $service_image=$this->input->post('image_old');
		    $service_name=$this->input->post('name');
		    $description=$this->input->post('description');
     	    $price=$this->input->post('price');
     	    $category_id=$this->input->post('categories');
     	    $type=$this->input->post('type');
     	    
     	    $update_array=array(
     	                   	     'service_name'=> $service_name,
     	                   	     'service_description'=>
     	                   	                 $description,
			                      'service_image'=>$service_image,
			                      'service_price'=>$price,
			                      'category_id'=>$category_id,
     	                          'type'=>$type    
						   	      );

		      
		     $result=$this->Service_model->update_service($update_array,$id);

		   if($result)
		   	 {
		   	 	redirect('services/all_services');
		   	 }
		   	else
		   	 {
                redirect('services/edit_service/'.$id);
		   	 }

           }
     }
    public function delete_service($id)
     {
     	$result=$this->Service_model->remove_service($id);
    	if($result)
    	{
    		redirect('Services/all_services');
    	}
     }


}


?>