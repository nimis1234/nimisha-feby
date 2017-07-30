<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  
  public function __construct()
    {
       parent::__construct();
       $this->load->model('User_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
    }

  public function user_profile($id)
    {
        $data['user_data']=$this->User_model->view_specific_user($id);
         $data['content']=$this->load->view('users/user_profile', $data,true);
          $this->load->view('common/layout',$data);
    }

  public function users_information()
   {
     
          $data['users']=$this->User_model->select_users();
          $data['content'] = $this->load->view('users/add_data_table', $data, true);
        //print_r($data);exit;
            $this->load->view('common/layout',$data);
      
          
   }

  public function add_users()
    {
          $data['user_types']=$this->User_model->select_user_types();
          $data['content']=$this->load->view('users/add_user_form', $data,true);
          $this->load->view('common/layout',$data);

    }
  public function add_user_action()
    {
             
       if($_FILES['image']['error']==0)
      {

       $config['upload_path']   =   "assets/dist/img/users/";
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
           $user_image=$data['upload_data']['file_name'];
             $name=$this->input->post('name');
				     $email=$this->input->post('email');
             $user_type=$this->input->post('user_types');
				     $password=$this->input->post('password');
				     $userdata= array('name' =>$name , 
                              'email' =>$email,
                              'user_type' =>$user_type,
                              'password' =>$password,
                               'image' =>$user_image
				     	             );
				     $result=$this->User_model->add_user($userdata);
				     if($result)
				      {
                  redirect('User/users_information');
				      }

           }
       }
    }

  public function view_user($user_id)
    {
          $data['user_data']=$this->User_model->view_specific_user($user_id);
          $data['content']=$this->load->view('users/view_user', $data,true);
          $this->load->view('common/layout',$data);

    }
  public function edit_user($user_id)
    {
          $data['user_data']=$this->User_model->specific_user($user_id);
          $data['user_types']=$this->User_model->select_user_types();
          $data['user_id']=$user_id;
          $data['content']=$this->load->view('users/update_user_form', $data,true);
          $this->load->view('common/layout',$data);
    }

  public function remove_user($user_id)
    {
            $result=$this->User_model->delete_user($user_id);
            if($result)
             {
               redirect('User/users_information');
             }
    }
  public function edit_user_action($user_id)
  {
    if(isset($_FILES['image'] ['name']) AND !empty($_FILES['image'] ['name']))
           {      
            if($_FILES['image']['error']==0)
             {
             $config['upload_path']   =   "assets/dist/img/users/";
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

               $image=$data['upload_data']['file_name'];
               $id=$user_id;
               $name=$this->input->post('name');
               $email=$this->input->post('email');
               $password=$this->input->post('password');
               $user_type=$this->input->post('user_types');
               $update_array=array(
                                    'name'=>$name,
                                    'email'=>$email,
                                    'user_type'=>$user_type,
                                    'password'=>$password,
                                    'image' => $image
                                  );
               $result=$this->User_model->update_user($update_array,$id);
               
               if($result)
                 {
                    redirect('User/users_information');
                 }
                else
                 {
                    redirect('User/edit_user/'.$id);
                 }
             }
          }
        }
       else
          {
             
               $image=$this->input->post('image_old');
               $id=$user_id;
               $name=$this->input->post('name');
               $email=$this->input->post('email');
               $password=$this->input->post('password');
               $user_type=$this->input->post('user_types');
              
               $update_array=array(
                                    'name'=>$name,
                                    'email'=>$email,
                                    'user_type'=>$user_type,
                                    'password'=>$password,
                                    'image' => $image
                                  );
          
          
           $result=$this->User_model->update_user($update_array,$id);
            if($result)
                 {
                    redirect('User/users_information');
                 }
                else
                 {
                    redirect('User/edit_user/'.$id);
                 }

          }


   }
 

 }


?>