<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends MY_Controller
{
	public function index()
	{
		$data = [];
		parent::view('question',  $data);
	}

}
