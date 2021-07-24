<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_maintenance extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Request_maintenance_model');
	}
	public function index()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');

		if ($start_date && $end_date)
		{
			$data['maintenances'] = $this->Request_maintenance_model->index_filter($start_date, $end_date);
			$data['start_date'] = $start_date;
			$data['end_date'] = $end_date;
		} else 
		{
			$data['maintenances'] = $this->Request_maintenance_model->index();
			$data['start_date'] = '';
			$data['end_date'] = '';
		}
		parent::view('request_maintenance',  $data);
	}

    public function update_status()
	{
		$data = $this->input->post();
		$ret = $this->Request_maintenance_model->update_status($data);		

		$message = parent::update_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/request-maintenance'));
	}
}
