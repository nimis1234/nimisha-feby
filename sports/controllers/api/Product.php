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
class Product extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model("api/Product_model","product");
    }
    /////////////////////////////////////Product List//////////////////////////////////////
    public function productlist_post()
    {  // print_r($this->input->post());exit();
        $from_rate = $this->input->post('from_rate');
        $to_rate = $this->input->post('to_rate');
        $brand = $this->input->post('brand');
        $model = $this->input->post('model');

        $result = $this->product->product_list($from_rate,$to_rate,$brand,$model);
        //print_r($result);exit();
          $data['brands']=$this->product->brand_list();
           if (isset($brand)) {
               $data['model']=$this->product->model_list($brand);
           }
           else
           {
                $data['model']="";
           }
         if($result)
         {
            
            
            foreach ($result as $key => $value) {
        
            
            $result[$key]['product_img']=base_url().'Assets/Images/product/'.$value['product_img'];


            }
           
           $data['product_list']=$result;
        }  
        else
        {
           $data['product_list']="";
        }
        if($data)
        {

          
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
    ///////////////////////////////////////////////////////////////////////////////////////

}
