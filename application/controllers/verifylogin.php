<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class verifylogin extends CI_Controller {
	function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		
		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('login_view');
		}
		else
		{
			//Go to private area
			redirect('home', 'refresh');
		}
	}

	function check_database()
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//query the database
		$result = $this->administrator_model->validate($username, $password);
		
		if($result->num_rows() != 0)
		{
			$sess_array = array(
				'username' => $result->result_array()[0]);
			$this->session->set_userdata('logged_in', $sess_array);
			session_start();
			redirect('home_controller','refresh');
		}
		else
		{
			$this->session->set_userdata('error_message', '<div class="alert alert-error">Invalid username or password</div>');
			redirect('auth','refresh');
		}
	}
}
?>
