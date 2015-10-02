<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
	    $data['judul'] = "Happy Happy Engineer";
        $data['main'] = "home";     
		$this->load->view('template', $data);
	}
	public function about_us()
	{
	
	    $data['judul'] = "About Us";
        $data['main'] = "about_us";     
		$this->load->view('template', $data);
	}
	public function men()
	{
	
	    $data['judul'] = "Men Collection";
        $data['main'] = "men_collection";     
		$this->load->view('template', $data);
	}
	public function women()
	{
	
	    $data['judul'] = "Womens Collection";
        $data['main'] = "womens_collection";     
		$this->load->view('template', $data);
	}
	public function contact_us()
	{
	
	    $data['judul'] = "Contact Us";
        $data['main'] = "contact_us";     
		$this->load->view('template', $data);
	}
	public function gallery()
	{
	
	    $data['judul'] = "Gallery";
        $data['main'] = "gallery";     
		$this->load->view('template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */