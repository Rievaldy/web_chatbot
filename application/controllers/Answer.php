<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends MY_Controller
{
	public function index()
	{
		$data = [];
		parent::view('answer',  $data);
	}

}
