<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends MY_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Question_model');
		$this->load->model('Label_model');
	}

	public function index()
	{
		$data['questions'] = $this->Question_model->index();
		$data['labels'] = $this->Label_model->index();
		parent::view('question',  $data);
	}

	public function create()
	{
		$data = $this->input->post();
		$ret = $this->Question_model->create($data);		

		$message = parent::create_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/question'));
	}

	public function destroy()
	{
		$id = $this->input->post();
		$ret = $this->Question_model->destroy($id);		

		$message = parent::destroy_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/question'));
	}

}
