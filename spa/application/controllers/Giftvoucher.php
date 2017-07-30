<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giftvoucher extends CI_Controller {
  
  public function __construct()
    {
       parent::__construct();
       $this->load->model('Voucher_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
    }

  public function voucher_list()
   {
     $data['list']=$this->Voucher_model->get_voucher_list();
     $data['content']=$this->load->view('vouchers/vouchers_list',$data,true);
      $this->load->view('common/layout',$data);

   }

  public function add_voucher()
   {
    $data['content']=$this->load->view('vouchers/add_voucher','',true);
      $this->load->view('common/layout',$data);

   }

  public function add_voucher_action()
   {
     if($_FILES['image']['error']==0)
      {

       $config['upload_path']   =   "assets/dist/img/vouchers/";
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
               $gift_image=$data['upload_data']['file_name'];
               $gift_name=$this->input->post('name');
               $description=$this->input->post('description');
               $gift_price=$this->input->post('price');
               $insert_array=array
                               (
                                'gift_name'=>$gift_name,
                                'gift_description'=>$description,
                                'gift_price'=>$gift_price,
                                'gift_image'=>$gift_image
                                );

              $result=$this->Voucher_model->add_voucher($insert_array);

               if($result)
                {
                    redirect('Giftvoucher/voucher_list');
                }
               else
                {
                     redirect('Giftvoucher/add_voucher');
                }

          }
      }
   }

  public function view_voucher($id)
   {
      $data['specific_voucher']=$this->Voucher_model->specific_voucher($id);
      $data['content']= $this->load->view('vouchers/view_voucher',$data,true);
      $this->load->view('common/layout',$data);

   }

  public function edit_voucher($id)
   {
      $data['specific_voucher']=$this->Voucher_model->specific_voucher($id);
      $data['id']=$id;
      $data['content']=$this->load->view('vouchers/update_voucher',$data,true);
      $this->load->view('common/layout',$data);
   }

  public function update_voucher_action($id)
   {
     if(isset($_FILES['image'] ['name']) AND !empty($_FILES['image'] ['name']))
           {      
            if($_FILES['image']['error']==0)
             {
             $config['upload_path']   =   "assets/dist/img/vouchers/";
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
             else
             {

               $data=array('upload_data'=>$this->upload->data());

               $gift_image=$data['upload_data']['file_name'];

               $gift_name=$this->input->post('name');

               $description=$this->input->post('description');

                $gift_price=$this->input->post('price');

              $update_array= array(
                                    'gift_name'=>$gift_name,
                                    'gift_description'=>$description,
                                    'gift_price'=>$gift_price,
                                    'gift_image'=>$gift_image

                                  );

               $result=$this->Voucher_model->update_voucher($update_array,$id);
               if($result)
                 {
                   redirect('Giftvoucher/voucher_list');
                 }
                else
                 {
                    redirect('Giftvoucher/edit_voucher/'.$id);
                 }
             }
          }
      }
       else
          {  
             
            $gift_image=$this->input->post('image_old');
            $gift_name=$this->input->post('name');
            $description=$this->input->post('description');
            $gift_price=$this->input->post('price');
             
            $update_array= array(
                                    'gift_name'=>$gift_name,
                                    'gift_description'=>$description,
                                    'gift_price'=>$gift_price,
                                    'gift_image'=>$gift_image

                                  );
             

          
            $result=$this->Voucher_model->update_voucher($update_array,$id);

            if($result)
                 {
                   redirect('Giftvoucher/voucher_list');
                 }
                else
                 {
                    redirect('Giftvoucher/edit_voucher/'.$id);
                 }

           }
   }

  public function delete_voucher($id)
   {
     $result=$this->Voucher_model->delete_voucher($id);
     if($result) 
       {
         redirect('Giftvoucher/voucher_list');
       }
   }

  public function voucher_order_list()
   {
     $data['order_list']=$this->Voucher_model->order_list();
     $data['content']= $this->load->view('vouchers/order_list',$data,true);
      $this->load->view('common/layout',$data);
   }

  public function view_order($id)
   {
      $data['specific_order']=$this->Voucher_model->specific_order($id);
      $data['content']= $this->load->view('vouchers/view_order',$data,true);
      $this->load->view('common/layout',$data);

   }

}