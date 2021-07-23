<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('Chat_model');
	}

	public function index()
	{
		$data['chats'] = $this->Chat_model->index();
		parent::view('chat',  $data);
	}

	public function index_chat()
	{
		$id_user = $this->input->post('id_user');
		echo json_encode($this->Chat_model->index_chat($id_user));
	}
}
