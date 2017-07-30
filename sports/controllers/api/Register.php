<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
//use Restserver\Libraries\REST_Controller;

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Register extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model("api/Register_model","register");
    }
    /////////////////////////////////////Registeration//////////////////////////////
     public function index_post()
    {
        //print_r($_FILES);exit(); 
        if($_FILES['profilepic_url']['error']==0)
        {

           $config['upload_path']   =   "Assets/images/appuser/";
           $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
           //$config['max_size']      =   "5000";
           //$config['max_width']     =   "1890";
           //$config['max_height']    =   "490";
          
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
           $image_name='profilepic_url';
           //print_r($image_name);exit(); 
           if(!$this->upload->do_upload($image_name)) {
               echo $this->upload->display_errors();exit();
           }
           else
           {
               $data=array('upload_data'=>$this->upload->data());
               $image=$data['upload_data']['file_name'];

               //print_r($image);
                $profile_pic=$image;
                $name=$this->input->post('name');
                $email_id=$this->input->post('email_id');
                $password=$this->input->post('password');
                $mobile_no=$this->input->post('contact_no');
                $address=$this->input->post('address');

                $add_array = array('name' => $name,
                                   'profile_pic' => $profile_pic,
                                   'email_id' => $email_id,
                                   'password' => $password,
                                   'mobile_no' => $mobile_no,
                                   'address' => $address);
               $result_insert  =$this->register->insert_data($add_array);
              // print_r($result_insert);exit(); 
        if ($result_insert) 
        {
            $profilepic_url=base_url().'Assets/Images/appuser/'.$profile_pic;
            //$student_id     =$result_insert->student_id;
            $data           =array('user_id'  =>$result_insert,
                                    'profile_pic'=>$profilepic_url,
                                    'name' => $name);

            $result=array(
                    'ErrorCode' =>0,
                    'Data'      =>$data,
                    'Message'   =>"Success"
                    );

        }
        else
        {
            $result=array(
                    'ErrorCode' =>1,
                    'Data'      =>"",
                    'Message'   =>"Failure"
                    );
        }
        
        //echo "<pre>";print_r($result);exit();
        if ($result)
        {
            return $this->response($result,200);
        }
    }
    }
  }
  ////////////////////////////////////////////////////////////////////////////////
  public function login_post()
    {
        $email_id=$this->input->post('email_id');
        $password=$this->input->post('password');
        $device_id=$this->input->post('device_id');
        //print_r($this->input->post());exit;
       // $profilepic_url=base_url().'Assets/Images/appuser/'.$profile_pic;
        $result=$this->register->login_check($email_id,$password);
        
        if($result)
        {
            
            $data =$result;

          $update_array = array('device_id' => $device_id);
            
            $user_id=$result->users_id;
           $result_update  =$this->register->device_update($update_array,$user_id);

            $data->profile_pic=base_url().'Assets/Images/appuser/'.$result->profile_pic;
            //print_r($data);exit();
            

             

            $result=array(
                    'ErrorCode' =>0,
                    'Data'      =>$data,
                    'Message'   =>"Success"
                    );

           }
          else
           {   
            $result=array(
                    'ErrorCode' =>1,
                    'Data'      =>"",
                    'Message'   =>"Failure"
                    );
           }
        
        //echo "<pre>";print_r($result);exit();
           if ($result)
           {
            return $this->response($result,200);
           }
    } 
    /////////////////////////////////////////////////////////////////////////////////////////
    public function editprofile_post()
    {
        $user_id = $this->input->post('user_id');
        
         $result=$this->register->edit_list($user_id);
        
        if($result)
        {
            
            $data =$result;
            $data->profile_pic=base_url().'Assets/Images/appuser/'.$result->profile_pic;
            //print_r($data);exit();
            $result=array(
                    'ErrorCode' =>0,
                    'Data'      =>$data,
                    'Message'   =>"Success"
                    );

           }
          else
           {   
            $result=array(
                    'ErrorCode' =>1,
                    'Data'      =>"",
                    'Message'   =>"Failure"
                    );
           }
        
        //echo "<pre>";print_r($result);exit();
           if ($result)
           {
            return $this->response($result,200);
           }
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    public function updateprofile_post()
    {
      $user_id=$this->input->post('user_id');

      if(isset($_FILES['profile_pic']['name']) AND !empty($_FILES['profile_pic']['name']))
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
            }
            
                $name=$this->input->post('name');
                $email_id=$this->input->post('email_id');
                $password=$this->input->post('password');
                $mobile_no=$this->input->post('contact_no');
                $address=$this->input->post('address');
            if($image){
              $profile_pic=$image;
               $update_array = array('name' => $name,
                                   'profile_pic' => $profile_pic,
                                   'email_id' => $email_id,
                                   'password' => $password,
                                   'mobile_no' => $mobile_no,
                                   'address' => $address);
            }
         }
       }
            else{

                $name=$this->input->post('name');
                $email_id=$this->input->post('email_id');
                $password=$this->input->post('password');
                $mobile_no=$this->input->post('contact_no');
                $address=$this->input->post('address');

              $update_array = array('name' => $name,
                                   'email_id' => $email_id,
                                   'password' => $password,
                                   'mobile_no' => $mobile_no,
                                   'address' => $address);
            }
              
               $result_update  =$this->register->update_data($update_array,$user_id);
               //print_r($result_update);exit(); 




        if ($result_update) 
        {
           // $profilepic_url=base_url().'Assets/Images/appuser/'.$profile_pic;
            //$student_id     =$result_insert->student_id;
            $data           = $result_update;

            $result=array(
                    'ErrorCode' =>0,
                    'Data'      =>$data,
                    'Message'   =>"Success"
                    );

        }
        else
        {
            $result=array(
                    'ErrorCode' =>1,
                    'Data'      =>"",
                    'Message'   =>"Failure"
                    );
        }
        
        //echo "<pre>";print_r($result);exit();
        if ($result)
        {
            return $this->response($result,200);
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    public function logout_post()
    {
        $user_id=$this->input->post('user_id'); 
           
         
            
          $update_array = array('device_id' => " ");
            
             
          $result  =$this->register->update_data($update_array,$user_id);

          if($result)
          {   

            $data=$result;

            $result=array(
                    'ErrorCode' =>0,
                    'Data'      =>$data,
                    'Message'   =>"Success"
                    );

           }
          else
           {   
            $result=array(
                    'ErrorCode' =>1,
                    'Data'      =>"",
                    'Message'   =>"Failure"
                    );
           }
        
        //echo "<pre>";print_r($result);exit();
           if ($result)
           {
            return $this->response($result,200);
           }

    }
  }


    

