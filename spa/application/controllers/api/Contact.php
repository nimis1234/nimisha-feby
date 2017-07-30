<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
//use  Restserver\Libraries\REST_Controller;

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
class Contact extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model("api/Contact_model");
    }


    ////////////////////////////////////////////////////////
      // Contact //
    ////////////////////////////////////////////////////////
    
    public function add_contact_post()
     {

        $name         = $this->input->post('name');
        $contact_no   = $this->input->post('mobile');
        $email        = $this->input->post('email');
        $message      = $this->input->post('message');

        $insert_array = array(
                               'contact_name' => $name,
                               'contact_no'   => $contact_no,
                               'email'        => $email,
                               'message'      => $message
                              );

        $result_insert = $this->Contact_model->insert_contact($insert_array);
        if ($result_insert) {

            $result=array(
                    'ErrorCode' =>0,

                    'Data'      =>"",
                    'Message'   =>"Success"
                    );

        }else{
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
