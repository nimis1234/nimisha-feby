<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

   
    public function __construct()
     {
       parent::__construct();
       $this->load->model('Gallery_model');
       if($this->session->has_userdata('email') AND !empty($_SESSION['email']))
        {
         
        }
      else
        {
          redirect('Login');
        }
     }

    public function image_list()
     {
       $data['images']=$this->Gallery_model->get_images();
       $data['content']=$this->load->view('gallery/image_list',$data,true);
       $this->load->view('common/layout',$data);
  
     }

     public function upload_image_action()
     {
          if (!empty($_FILES['userFiles']['name'][0])) {
               $filesCount = count($_FILES['userFiles']['name']);
               for ($i=0; $i < $filesCount; $i++) { 
                    $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                    $uploadPath      = 'assets/dist/img/image_gallery/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = '*';
               
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('userFile')){
                         $fileData = $this->upload->data();
                         $uploadData[$i]['file_name'] = $fileData['file_name'];
                    }else{
                         echo $this->upload->display_errors();exit();
                    }
                    
               }//echo "<pre>";print_r($uploadData);exit();

               if ($uploadData) {
                    foreach ($uploadData as $key => $value) {
                         $insert_array=array
                                            ('image_name'=>$value['file_name']);
                         $this->Gallery_model->add_images($insert_array);
                    }
               }

          }
          redirect('Gallery/image_list');

     }

     public function view_image($id)
      {
       $data['specific_image']=$this->Gallery_model->specific_image($id);
       $data['content']=$this->load->view('gallery/view_image',$data,true);
       $this->load->view('common/layout',$data);
  
      }

     public function delete_image($id)
      {

          $result=$this->Gallery_model->remove_image($id);
          if($result)
           {
              redirect('Gallery/image_list');
           }
     
      }

     public function videos_list()
      {
        $data['videos']=$this->Gallery_model->get_videos();
        $data['content']=$this->load->view('gallery/videos_list',$data,true);
        $this->load->view('common/layout',$data);
      }

     public function add_video()
      {
        $data['content']=$this->load->view('gallery/add_video_form','',true);
        $this->load->view('common/layout',$data);
      }

     public function add_video_action()
      {
          $video_name=$this->input->post('name');
          $video_address=$this->input->post('address');
          $insert_array=array(
                               "video_name"=>$video_name,
                               "video_address"=>$video_address
                             );
          $result=$this->Gallery_model->add_video($insert_array);
          if($result)
            {
             redirect('Gallery/videos_list');  
            }
      }

     public function view_video($id)
      {
       $data['specific_video']=$this->Gallery_model->specific_video($id);
       $data['content']=$this->load->view('gallery/view_video',$data,true);
       $this->load->view('common/layout',$data);
  
      }

     public function delete_video($id)
      {

          $result=$this->Gallery_model->remove_video($id);
          if($result)
           {
              redirect('Gallery/videos_list');
           }
     
      }

     
    


  }