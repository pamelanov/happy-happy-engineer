<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		
		 $data['judul'] = "Contact Us";
        $data['main'] = "percobaan/upload_form";
		$data['error'] = ' ';
		$this->load->view('template', $data);

	}

	function do_upload()
	{
		$data = array(
'productname' => $this->input->post('productname'),
'productcode' => $this->input->post('productcode'),
'price' => $this->input->post('price'),
'sizes' => $this->input->post('sizes'),
'description' => $this->input->post('description')
);
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('percobaan/upload_success', $data);
		}
	}
}
?>