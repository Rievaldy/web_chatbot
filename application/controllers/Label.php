<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Label extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Label_model');
	}

	public function index()
	{
		$data['labels'] = $this->Label_model->index();
		parent::view('label',  $data);
	}

	public function create()
	{
		$data = $this->input->post();
		$ret = $this->Label_model->create($data);		

		$message = parent::create_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/label'));
	}

	public function destroy()
	{
		$id = $this->input->post();
		$ret = $this->Label_model->destroy($id);		

		$message = parent::destroy_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/label'));
	}

}
