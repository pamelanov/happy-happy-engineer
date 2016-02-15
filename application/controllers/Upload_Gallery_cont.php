<?php

class Upload_Gallery_cont extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('upload_gallery_model');
	}

	function index()
	{
		
		$data['judul'] = "Upload Form";
        $data['main'] = "upload_gallery_view";
		$data['error'] = ' ';
		$this->load->view('template', $data, array('error' => ' ' ));

	}
	

	function do_upload()
	{
		$config['upload_path'] = './foto_gallery/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['image_width']	= '0';
		$config['image_height']  = '0';
		$config['max_size']  = '30000';
		$config['remove_spaces']  = 'true';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());

			$data['judul'] = "Upload Failed";
			$data['main'] = "upload_gallery_failed";
			$this->load->view('template', $data);
		}
		else{
			$dataUpload = array();
			$dataUpload = $this->upload->data();
			
			// menyimpan isian dari form ke dalam variabel
			$data = array(
				'foto_gallery' => $dataUpload['file_name']
			);


			// memasukkan isian form ke dalam database
			$success = $this->upload_gallery_model->form_insert($data);
			
			if ($success) {
				$data['judul'] = "Upload Success";
				$data['main'] = "upload_gallery_success";
				$this->load->view('template', $data);
			 }
			 
			 else{
				$data['judul'] = "Upload Failed";
				$data['main'] = "upload_gallery_failed";
				$this->load->view('template', $data);
			 }
		}

		
	
				
	}
	
}
