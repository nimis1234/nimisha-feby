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
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->load->model("api/Gift_voucher_model");
    }

    /////////////////////////////////////////////////////////
         //api for Show all gift vouchers //
    /////////////////////////////////////////////////////////
    
    public function index_get()
      {

        $data=$this->Gift_voucher_model->get_voucher_list();
        foreach ($data as $key => $value) 
          {
             $data[$key]['gift_image']=base_url()."assets/dist/img/vouchers/".$value['gift_image'];

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
    /////////////////////////////////////////////////////////
         //api for Show a specific gift voucher with description//
    /////////////////////////////////////////////////////////
    public function gift_description_post()
      {

        $voucher_id=$this->input->post('voucher_id');
        $data=$this->Gift_voucher_model->view_voucher( $voucher_id);
        foreach ($data as $key => $value) 
          {
             $data[$key]['gift_image']=base_url()."assets/dist/img/vouchers/".$value['gift_image'];

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

  /////////////////////////////////////////////////////////
         //api for order a gift voucher //
    /////////////////////////////////////////////////////////
    public function gift_order_post()
      {
         $voucher_id       = $this->input->post('voucher_id');
         $voucher_price    = $this->input->post('voucher_price');
         $sender_name      = $this->input->post('sender_name');
         $sender_email     = $this->input->post('sender_email');
         $sender_mobile    = $this->input->post('sender_mobile');
         $receiver_name    = $this->input->post('receiver_name');
         $receiver_email   = $this->input->post('receiver_email');
         $receiver_address = $this->input->post('receiver_address');
         $receiver_mobile  = $this->input->post('receiver_mobile');
         $message          = $this->input->post('message');
         $date             = $this->input->post('date');
         $time             = $this->input->post('time');


         $insert_array = array(
                                'voucher_id'       => $voucher_id,
                                'voucher_price'    => $voucher_price,
                                'sender_name'      => $sender_name,
                                'sender_email'     => $sender_email,
                                'sender_mobile'    => $sender_mobile,
                                'receiver_name'    => $receiver_name,
                                'receiver_email'   => $receiver_email,
                                'receiver_address' => $receiver_address,
                                'receiver_mobile'  => $receiver_mobile,
                                'message'          => $message,
                                'date'             => $date,
                                'time'             => $time
                              );
        //print_r($insert_array);exit;
         $data = $this->Gift_voucher_model->order_gift($insert_array);

         if($data)
            {
              
              $result= array(
                            'ErrorCode' => 0,
                            'data'      => "",
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
    
 }