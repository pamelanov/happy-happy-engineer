<?php

class upload_news extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('upload_model');
	}

	function index()
	{
		
		$data['judul'] = "News";
        $data['main'] = "news_form";
		$data['error'] = ' ';
		$this->load->view('template', $data);

	}

	function do_upload()
	{
		$data = array(
		'judulBerita' => $this->input->post('judulBerita'),
		'tanggalBerita' => $this->input->post('tanggalBerita'),
		'isiBerita' => $this->input->post('isiBerita'),
		);
		
		$config['foto_berita'] = './foto_berita/';
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