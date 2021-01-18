<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Delete_Model extends CI_Model {
public function deleterow($uid){
$sql_query=$this->db->where('id', $uid)
                ->delete('tblusers'); 
           if($sql_query){
$this->session->set_flashdata('success', 'Record delete successfully');
		redirect('read');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
	}

}
}