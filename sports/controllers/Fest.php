<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fest extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
        {
        	 parent::__construct();
             $this->load->model('Fest_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function gallery_list()
    {
    	$data['result'] = $this->Fest_model->image_list();
    	$data['content'] = $this->load->view('gallery/sports_fest',$data, true);
        $this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_fest()
    {
    	$data['content'] = $this->load->view('gallery/add_fest','',true);
    	$this->load->view('common/layout',$data);
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_fest_action()
    {
		
    	//echo "<pre>";print_r($_FILES);exit();
    	 if (!empty($_FILES['image']['name'][0])) {
               $filesCount = count($_FILES['image']['name']);
               for ($i=0; $i < $filesCount; $i++) { 
                    $_FILES['userFile']['name'] = $_FILES['image']['name'][$i];
                    $_FILES['userFile']['type'] = $_FILES['image']['type'][$i];
                    $_FILES['userFile']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                    $_FILES['userFile']['error'] = $_FILES['image']['error'][$i];
                    $_FILES['userFile']['size'] = $_FILES['image']['size'][$i];

                    $uploadPath      = 'Assets/images/festgallery/';
                    //print_r($uploadPath);exit();
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = '*';
               
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('userFile')){
                         $fileData = $this->upload->data();
                         $uploadData[$i]['file_name'] = $fileData['file_name'];
                    }
                    else
                    {
                         echo $this->upload->display_errors();exit();
                    }
                    
               }//echo "<pre>";print_r($uploadData);exit();

               if ($uploadData) {
                    foreach ($uploadData as $key => $value) {
                         $insert_array=array
                                            ('image'=>$value['file_name']);
                         $this->Fest_model->add_images($insert_array);
                    }
               }


          }
         redirect('Fest/gallery_list');

     }
     /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete_image($id)
    {
        $result=$this->Fest_model->delete_image($id);
        if($result)
        {
            redirect('Fest/gallery_list/'.$id);   
        }
    }
}