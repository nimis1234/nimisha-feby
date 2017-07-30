<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
             $this->load->model('About_model');
             if($this->session->has_userdata('username') AND !empty($_SESSION['username']))
		     {

		     }
            else
             {
        	   redirect('Login');
             }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function about_list()
    {
    	$data['result']=$this->About_model->about_data();
    	$data['content']=$this->load->view('aboutus/about_list',$data,true);
    	$this->load->view('common/layout',$data);
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function add_about()
    {
    	$data['content']=$this->load->view('aboutus/add_about','',true);
    	$this->load->view('common/layout',$data);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_about_action()
    {
    	$add_array = array('aboutus' => $this->input->post('text'),);
		        $result=$this->About_model->add_data($add_array);

		    	if($result)
				{
				   
		           redirect('About/About_list');

				}
				else
				{
					redirect('About/add_about');
				}
    }
    /////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {
    	$data['result']=$this->About_model->edit_list($id);
    	$data['content']=$this->load->view('aboutus/edit_about',$data,true);
    	$this->load->view('common/layout',$data);
    }
    ////////////////////////////////////////////////////////////////////////////////////////
    public function edit_action($id)
    {
    	//print_r($id);exit();
    	$text=$this->input->post('text');
    	$edit_array = array('aboutus' => $text);
	    $result=$this->About_model->edit_data($edit_array,$id);

		    	if($result)
				{
				   
		           redirect('About/About_list');

				}
				else
				{
					redirect('About/edit');
				}
    }

}