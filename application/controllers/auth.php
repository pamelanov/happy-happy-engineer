<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function index()
	{
		//$data['msg'] = $msg;
		if($this->session->userdata('logged_in')){
			redirect('home','refresh');
		}
		else
		{
			$data['error_message'] = $this->session->userdata('error_message');
			$data['main'] = 'login_view';
			$data['judul'] = 'Admin Login';
			$this->session->unset_userdata('error_message');
			$this->load->helper(array('form'));
			$this->load->view('template',$data);
		}
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('auth','refresh');
		
		// $sesi_items = array('role' => '');
  //       $this->session->unset_userdata($sesi_items);
  //       $this->session->set_flashdata('error', "You've been logged out!");
  //       redirect('auth','refresh');	

	}
}

?>