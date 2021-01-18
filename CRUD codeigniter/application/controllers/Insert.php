<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {
// For data insertion	
public function index(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[11]');
$this->form_validation->set_rules('address','Address','required');	

if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$email=$this->input->post('emailid');
$cntno=$this->input->post('contactno');
$adrss=$this->input->post('address');
$this->load->model('Insert_Model');
$this->Insert_Model->insertdata($fname,$lname,$email,$cntno,$adrss);
$this->load->view('insert');
} else {
$this->load->view('insert');
}
}

// For data updation
public function updatedetails(){
$this->form_validation->set_rules('firstname','First Name','required|alpha');	
$this->form_validation->set_rules('lastname','Last Name','required|alpha');	
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('address','Address','required');	

if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$email=$this->input->post('emailid');
$cntno=$this->input->post('contactno');
$adrss=$this->input->post('address');
$usid=$this->input->post('userid');
$this->load->model('Insert_Model');
$this->Insert_Model->updatedetails($fname,$lname,$email,$cntno,$adrss,$usid);
} else {
$this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
		redirect('read');
}
}

}