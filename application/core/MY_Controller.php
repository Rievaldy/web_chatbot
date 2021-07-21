<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  public $title = '';

  public function __construct()
  {
    parent::__construct();
  }

  public function view($view, $data)
  {
    $data['view_name'] = $view;
    $this->load->view('partials/header', $data);
    $this->load->view('partials/navbar', $data);
    $this->load->view('partials/sidebar', $data);
    $this->load->view($view, $data);
    $this->load->view('partials/footer', $data);
  }
}
