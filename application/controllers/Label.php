<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Label extends MY_Controller
{
	public function index()
	{
		$data = [];
		parent::view('label',  $data);
	}

}
