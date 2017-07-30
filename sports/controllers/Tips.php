<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

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
             $this->load->model('Tips_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    public function tips_list()
    {
    	$data['result'] = $this->Tips_model->healthtips();
    	$data['content'] = $this->load->view('product/healthtips',$data, true);
        $this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_tips()
    {
    	$data['content'] = $this->load->view('product/tips_form','',true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_tips_action()
    {

		$tipname=$this->input->post('tipname');
		$description=$this->input->post('description');
		
		$register_array = array('tipname' => $tipname,
							    'tip_description' =>$description);
		$tip_id=$this->Tips_model->register_data($register_array);
		//print_r($result);exit();
		

    	if ($tip_id && !empty($_FILES['image']['name'])) {
			$filesCount = count($_FILES['image']['name']);
			for ($i=0; $i < $filesCount; $i++) { 
				$_FILES['userFile']['name'] 	= $_FILES['image']['name'][$i];
                $_FILES['userFile']['type'] 	= $_FILES['image']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                $_FILES['userFile']['error'] 	= $_FILES['image']['error'][$i];
                $_FILES['userFile']['size'] 	= $_FILES['image']['size'][$i];

                $uploadPath  				= 'Assets/images/tips';
                $config['upload_path'] 		= $uploadPath;
                $config['allowed_types'] 	= '*';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                //echo "<pre>";print_r($this->upload);exit();
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                }
                else
                {
                	echo $this->upload->display_errors();exit();
                }
			}
			
			//echo "<pre>";print_r($uploadData);exit();
			if ($uploadData) {
				foreach ($uploadData as $key => $value) {
					$insert_array= array('image' 	=> $value['file_name'],
									     'tip_id' 	=> $tip_id,
									);

					$result_doc = $this->Tips_model->insert_document($insert_array);
				}

				if ($result_doc) {
					
					redirect('Tips/tips_list');
				}
			}	
		}
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function tips_view($id)
    {
        $data['view'] = $this->Tips_model->view_list($id);
        $data['images'] = $this->Tips_model->image_list($id);
        //echo "<pre>";print_r($data);exit();
        $data['content'] = $this->load->view('product/tips_view',$data,true);
        $this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function tips_edit($id)
    {
        $data['res'] = $this->Tips_model->edit_list($id);
        $data['images'] = $this->Tips_model->image_edit($id);
        //print_r($data);exit;
        $data['content'] = $this->load->view('product/tips_edit',$data,true);
        $this->load->view('common/layout',$data);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit_action($id)
    {
        $tipname=$this->input->post('tipname');
        $description=$this->input->post('description');
        
        $edit_array = array('tipname' => $tipname,
                                'tip_description' =>$description);
        $result=$this->Tips_model->edit_data($edit_array,$id);
        //print_r($result);exit();
        

        if ($result && !empty($_FILES['image']['name'])) {
            $filesCount = count($_FILES['image']['name']);
            for ($i=0; $i < $filesCount; $i++) { 
                $_FILES['userFile']['name']     = $_FILES['image']['name'][$i];
                $_FILES['userFile']['type']     = $_FILES['image']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                $_FILES['userFile']['error']    = $_FILES['image']['error'][$i];
                $_FILES['userFile']['size']     = $_FILES['image']['size'][$i];

                $uploadPath                 = 'Assets/images/tips';
                $config['upload_path']      = $uploadPath;
                $config['allowed_types']    = '*';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                //echo "<pre>";print_r($this->upload);exit();
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                }
                else
                {
                    echo $this->upload->display_errors();exit();
                }
            }
            
            //echo "<pre>";print_r($uploadData);exit();
            if ($uploadData) {
                foreach ($uploadData as $key => $value) {
                    $insert_array= array('image'    => $value['file_name'],
                                         'tip_id'   => $id,
                                    );

                    $result_doc = $this->Tips_model->add_document($insert_array);
                }

                if ($result_doc) {
                    
                     redirect('Tips/tips_edit/'.$id); 
                }
            }   
        }
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete_image($id,$tip_id)
    {
        $result=$this->Tips_model->delete_image($id);
        if($result)
        {
            redirect('Tips/tips_edit/'.$tip_id);   
        }
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////
    public function tips_remove($id)
    {
    	$result=$this->Tips_model->remove_list($id);
		if($result)
		{
		    redirect('Tips/tips_list/'.$id);   
		}
    }
}