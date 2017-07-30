<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
             $this->load->model('Contact_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function contacts()
    {
    	$data['result']=$this->Contact_model->contact_list();
    	$data['content']=$this->load->view('contact/contact_list',$data,true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function add_contact()
    {
    	$data['content'] = $this->load->view('contact/add_contact','',true);
    	$this->load->view('common/layout',$data);
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function add_contact_action()
    {
    	$place=$this->input->post('city');
		$address=$this->input->post('address');
		
		$register_array = array('city' => $place,
							  'address' =>$address);
		$result=$this->Contact_model->register_data($register_array);

		if($result)
		{
           redirect('Contact/contacts');
		}
		else
		{
			redirect('Contact/add_contact');
		}
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function update_contact($id)
    {
    	
    	$data['result'] = $this->Contact_model->update_form($id);
    	$data['content'] = $this->load->view('contact/update_contact',$data,true);
    	$this->load->view('common/layout',$data);
       
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    public function update_action($id)
    {

    	$place=$this->input->post('city');
    	$address=$this->input->post('address');
    	$update_array = array('city' =>$place,
							  'address' =>$address);
    	
    		//print_r($update_array);exit;
    	$result=$this->Contact_model->update_data($update_array,$id);

		if($result)
		{
           redirect('Contact/contacts');
		}
		else
		{
			redirect('Contact/update_contact');
		}
    }
    ///////////////////////////////////////////////////////////////////////////////////
    public function delete_contact($id)
    {
    	
    	$result=$this->Contact_model->delete_list($id);
		if($result)
		{
		    redirect('Contact/contacts/'.$id);   
		}
	   
	}
}