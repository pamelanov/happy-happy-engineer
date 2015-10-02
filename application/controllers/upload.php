<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('upload_model');
	}

	function index()
	{
		
		 $data['judul'] = "Upload Form";
        $data['main'] = "percobaan/upload_form";
		$data['error'] = ' ';
		$this->load->view('template', $data, array('error' => ' ' ));

	}
	

	function do_upload()
	{


		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('percobaan/upload_form', $error);
		}
		else
	
		{
			$dataUpload = array();
			$dataUpload = $this->upload->data();

			

			$this->load->view('percobaan/upload_success', $dataUpload);
			
				$data = array(
'Jenis_Produk' => $this->input->post('productname'),
'ID_Produk' => $this->input->post('productcode'),
'Harga' => $this->input->post('price'),
'Size' => $this->input->post('sizes'),
'Gender' => $this->input->post('gender'),
'Deskripsi_Produk' => $this->input->post('description'),
'Upload_Path' => $dataUpload['file_name']
);
	

	$this->upload_model->form_insert($data);
		}
		
	
				
	}
}
?>