<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends MY_Controller
{
	public function index()
	{
		$data = [];
		parent::view('chat',  $data);
	}

}
