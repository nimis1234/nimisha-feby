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
class Service extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->load->model("api/Service_model");
    }

    /////////////////////////////////////////////////////////
         //api for Show all services category //
    /////////////////////////////////////////////////////////
    
    public function service_categories_post()
      {
        $cat_id = $this->input->post('cat_id');
        $type   = $this->input->post('type'); 

        $data   = $this->Service_model->cat_services($cat_id,$type);
        foreach ($data as $key => $value) 
          {
             $data[$key]['service_image']=base_url()."assets/dist/img/services/".$value['service_image'];

          }

        if($data)
         {
            $result= array(
                            'ErrorCode' => 0,
                            'data'      => $data,
                            'Message'   => "Success"
                          );
         }
        else
         {
             $result= array(
                            'ErrorCode' => 1,
                            'data'      => "",
                            'Message'   => "Failure"
                          );
         }

         if($result)
         {

            return $this->response($result,200);
         }

      }

    public function view_service_post()
      {
        $service_id=$this->input->post('service_id');

        $data=$this->Service_model->get_service($service_id);
        
        foreach ($data as $key => $value) 
          {
             $data[$key]['service_image']=base_url()."assets/dist/img/services/".$value['service_image'];

          }

        if($data)
         {
            $result= array(
                            'ErrorCode' => 0,
                            'data'      => $data,
                            'Message'   => "Success"
                          );
         }
        else
         {
             $result= array(
                            'ErrorCode' => 1,
                            'data'      => "",
                            'Message'   => "Success"
                          );
         }

         if($result)
         {

            return $this->response($result,200);
         }

      }
 }