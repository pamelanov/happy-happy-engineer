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
        $data['main'] = "upload_form";
		$data['error'] = ' ';
		$this->load->view('template', $data, array('error' => ' ' ));

	}
	

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['image_width']	= '0';
		$config['image_height']  = '0';
		$config['max_size']  = '3000';
		$config['remove_spaces']  = 'true';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data['judul'] = "Upload Failed";
				$data['main'] = "upload_failed";
				$this->load->view('template', $data);
		}
		else
	
		{
			$dataUpload = array();
			$dataUpload = $this->upload->data();
			//$this->load->view('upload_success', $dataUpload);
			
			// menyimpan isian dari form ke dalam variabel
			$data = array(
			'Jenis_Produk' => $this->input->post('productname'),
			'ID_Produk' => $this->input->post('productcode'),
			'Harga' => $this->input->post('price'),
			'Size' => $this->input->post('sizes'),
			'Gender' => $this->input->post('gender'),
			'Deskripsi_Produk' => $this->input->post('description'),
			'Upload_Path' => $dataUpload['file_name']
			);

			// memasukkan isian form ke dalam database
			$success = $this->upload_model->form_insert($data);
			
			if ($success) {
				$data['judul'] = "Upload Success";
				$data['main'] = "upload_success";
				$this->load->view('template', $data);
			 }
			 
			 else{
				$data['judul'] = "Upload Failed";
				$data['main'] = "upload_failed";
				$this->load->view('template', $data);
			 }
		}
		
	
				
	}
	
	function edit(){
		if (isset($_FILES['userfile']) && !empty($_FILES['userfile'])) {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['image_width']	= '0';
		$config['image_height']  = '0';
		$config['max_size']  = '3000';
		$config['remove_spaces']  = 'true';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data = array(
			'Jenis_Produk' => $this->input->post('productname'),
			'ID_Produk' => $this->input->post('productcode'),
			'Harga' => $this->input->post('price'),
			'Size' => $this->input->post('sizes'),
			'Gender' => $this->input->post('gender'),
			'Deskripsi_Produk' => $this->input->post('description'),
			);
			
			$success = $this->upload_model->form_edit($this->input->post('ori_prod_cod'), $data);
			
			if ($success) {
				$data['judul'] = "Edit Success";
				$data['main'] = "edit_success";
				$this->load->view('template', $data);
			 }
			 
			 else{
				$data['judul'] = "Edit Failed";
				$data['main'] = "edit_failed";
				$this->load->view('template', $data);
			 }
		}
		else
		{
			$dataUpload = array();
			$dataUpload = $this->upload->data();
			//$this->load->view('upload_success', $dataUpload);
			
			// menyimpan isian dari form ke dalam variabel
			$data = array(
			'Jenis_Produk' => $this->input->post('productname'),
			'ID_Produk' => $this->input->post('productcode'),
			'Harga' => $this->input->post('price'),
			'Size' => $this->input->post('sizes'),
			'Gender' => $this->input->post('gender'),
			'Deskripsi_Produk' => $this->input->post('description'),
			'Upload_Path' => $dataUpload['file_name']
			);

			// memasukkan isian form ke dalam database
			$success = $this->upload_model->form_edit($this->input->post('ori_prod_cod'), $data);
			
			if ($success) {
				$data['judul'] = "Edit Success";
				$data['main'] = "edit_success";
				$this->load->view('template', $data);
			 }
			 
			 else{
				$data['judul'] = "Edit Failed";
				$data['main'] = "edit_failed";
				$this->load->view('template', $data);
			 }
			
		}
		}
		
		
	}
}
?>