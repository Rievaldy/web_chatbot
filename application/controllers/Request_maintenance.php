<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_maintenance extends MY_Controller
{
	public function index()
	{
		$data = [];
		parent::view('request_maintenance',  $data);
	}

}
