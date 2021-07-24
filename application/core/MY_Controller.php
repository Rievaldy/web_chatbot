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

  public function create_response($ret)
  {
    $message['text'] = $ret ? 'Data has been created' : 'Failed to create data';
    $message['class'] = $ret ? 'alert-primary' : 'alert-danger';
    return $message;
  }

  public function destroy_response($ret)
  {
    $message['text'] = $ret ? 'Data has been deleted' : 'Failed to delete data';
    $message['class'] = $ret ? 'alert-primary' : 'alert-danger';
    return $message;
  }

  public function update_response($ret)
  {
    $message['text'] = $ret ? 'Data has been updated' : 'Failed to update data';
    $message['class'] = $ret ? 'alert-primary' : 'alert-danger';
    return $message;
  }

}
