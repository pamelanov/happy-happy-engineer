<?php

class Upload_news extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('news_upload_model');
	}

	function index()
	{
		
		$data['judul'] = "News";
        $data['main'] = "upload_news_form";
		$data['error'] = ' ';
		$this->load->view('template', $data);

	}

function do_upload(){
	  $config['upload_path'] = './foto_berita/';
	  $config['allowed_types'] = 'gif|jpg|png';
	  $config['image_width'] = '0';
	  $config['image_height']  = '0';
	  $config['max_size']  = '300000';
	  $config['remove_spaces']  = 'true';

	  $this->load->library('upload', $config);
	  	
	  if ( ! $this->upload->do_upload())
	  {
	   $error = array('error' => $this->upload->display_errors());

	   $this->load->view('upload_news_form', $error);
	  }
	  else
	 
	  {
	   $dataUpload = array();
	   $dataUpload = $this->upload->data();
	   //$this->load->view('upload_success', $dataUpload);
	   
	   // menyimpan isian dari form ke dalam variabel
	   $data = array(
	   'judul_berita' => $this->input->post('judulBerita'),
	   'Tanggal' => $this->input->post('tanggalBerita'),
	   'isi_berita' => $this->input->post('isiBerita'),
	   'foto_berita' => $dataUpload['file_name']
	   );

	   // memasukkan isian form ke dalam database
	   $success = $this->news_upload_model->form_insert($data);
	   
	   if ($success) {
	    $data['judul'] = "Upload Success";
	    $data['main'] = "upload_success";
	    $this->load->view('template', $data);
	    }
	  }
  
 
    
 }
}
?>