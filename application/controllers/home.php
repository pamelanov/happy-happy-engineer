<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
	 		
	 		//view
			$data['judul'] = "Happy Happy Engineer";
   			$data['main'] = "home_admin";     
			$this->load->view('template_admin', $data);
			
			
		}
		else
		{
			redirect('auth','refresh');
		}
	}

	public function men()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
	 		
	 		//view
			$data['judul'] = "Men Collection";
	        $data['main'] = "men_collection_admin";     
			$this->load->view('template_admin', $data);
			
			
		}
		else
		{
			redirect('auth','refresh');
		}
		
		    
	}
	public function women()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
	 		
	 		//view
			$data['judul'] = "Womens Collection";
        	$data['main'] = "womens_collection";     
			$this->load->view('template_admin', $data);
			
			
		}
		else
		{
			redirect('auth','refresh');
		}
		
		    
	}
	public function gallery()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
	 		
	 		//view
			$data['judul'] = "Gallery";
        	$data['main'] = "gallery";     
			$this->load->view('template_admin', $data);
			
		}
		else
		{
			redirect('auth','refresh');
		}
		
		    
	}
	public function logout(){
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('home', 'refresh');
	}
	}
?>
