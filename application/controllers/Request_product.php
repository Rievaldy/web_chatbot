<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_product extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Request_product_model');
	}
	
	public function index()
	{
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');

		if ($start_date && $end_date)
		{
			$data['products'] = $this->Request_product_model->index_filter($start_date, $end_date);
			$data['start_date'] = $start_date;
			$data['end_date'] = $end_date;
		} else 
		{
			$data['products'] = $this->Request_product_model->index();
			$data['start_date'] = '';
			$data['end_date'] = '';
		}
		parent::view('request_product',  $data);
	}
	public function index_by_id()
	{
		$id = $this->input->post('id_subcribe_product');
		$data = $this->Request_product_model->index_by_id($id);		
		echo json_encode($data);
	}
    public function update()
	{
		$data = $this->input->post();
		$ret = $this->Request_product_model->update($data);		

		$message = parent::update_response($ret);
		$this->session->set_flashdata('message', $message);
		redirect(site_url('dashboard/request-product'));
	}
}
