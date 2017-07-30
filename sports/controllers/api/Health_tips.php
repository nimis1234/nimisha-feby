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
class Health_tips extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model("api/Tip_model","tips");
    }
    /////////////////////////////////////Health Tips////////////////////////////////////////
    public function healthtips_get()
    {
        $result=$this->tips->tips_list();
       
          if($result)
        {
            foreach ($result as $key => $value) {
                $result[$key]['image']=base_url().'Assets/Images/tips/'.$value['image'];
                 $result[$key]['timestamp']=date("d/M/y",strtotime($value['timestamp']));
              
            }
            //print_r($result);exit();
            
             $data['health_tip_list'] =$result;
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
    public function tipdetails_post()
    {
        $tip_id=$this->input->post('tip_id');

        $result=$this->tips->tip_details($tip_id);

         if ($result) 
        {
          
            $data   = $result;
            $data->timestamp=date("d/M/y",strtotime('timestamp'));
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