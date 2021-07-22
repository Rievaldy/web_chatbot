<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends MY_Controller
{
	public function index()
	{
		$data = [];
		$this->load->view('my404',  $data);
	}

}
