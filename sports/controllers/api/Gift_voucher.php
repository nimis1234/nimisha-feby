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
class Gift_voucher extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model("api/Voucher_model","voucher");
    }
    /////////////////////////////////////Gift Voucher////////////////////////////////////////
    public function giftvoucher_post()
    {
        $start_rate = $this->input->post('start_rate');
        $end_rate = $this->input->post('end_rate');

         $result = $this->voucher->voucher_list($start_rate,$end_rate);

          if($result)
         {
            
            
            foreach ($result as $key => $value) {
        
            
            $result[$key]['voucher_img']=base_url().'Assets/Images/gift/'.$value['voucher_img'];


            }
           
           $data['voucher_details']=$result;

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
}