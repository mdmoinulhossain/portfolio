<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Main_model');
		$this->load->database();
	}

	
	public function index()
	{
		$data['project'] = $this->Main_model->get_all_projects();
		$data['blog'] = $this->Main_model->get_blogs();
		$this->load->view("index",$data);
	}
	
	public function projects()
	{
		$data['projects'] = $this->Main_model->all_projects();
		$this->load->view("projects",$data);
	}
	
	public function certificates()
	{
		$data['certificates'] = $this->Main_model->get_all_blogs();
		$this->load->view("certificates",$data);
	}

	public function form_validation()
	{
		//echo 'moinul';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Name", 'required');
		$this->form_validation->set_rules("mail", "Mail", 'required|valid_email');
		$this->form_validation->set_rules("topic", "Topic", 'required');
		$this->form_validation->set_rules("msg", "Message", 'required');

		if($this->form_validation->run())
		{
			//return true
			$this->load->model('Main_model');//form validation
			
			$data = array(
				/*db table field*/"name"  	=>$this->input->post("name"),/*html field name */
				"email"  	=>$this->input->post("mail"),
				"topic"  	=>$this->input->post("topic"),
				"message"  	=>$this->input->post("msg")
			);
			
			$this->Main_model->insert_data($data);
			
			/* redirect after data insert */ redirect(base_url('index.php/') . "Home/inserted");

		}
		else
		{
			//return false
			$this->index();
		}
	}

	public function inserted()
	{
		$this->index();
	}
}

