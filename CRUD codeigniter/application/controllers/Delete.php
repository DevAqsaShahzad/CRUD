<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Delete extends CI_Controller{
public function index($uid)
{
$this->load->model('Delete_Model');
$this->Delete_Model->deleterow($uid);
$this->load->view('read');
}
}