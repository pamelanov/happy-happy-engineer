
<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

 class news_controller extends CI_Controller {
 
 
  public function __Construct(){
   parent ::__construct();
   
   $this->load->model('news_model');
  
   /* memanggil atau mengkoneksikan model pagination
     dengan controller pagination */
  }
  
  public function index()  {
  
   $this->view();
  }
  
  public function view($offset=0) {
  
   $jml = $this->db->get('news');
   
   $config['base_url'] = base_url().'index.php/news_controller/view';
   
   $config['total_rows'] = $jml->num_rows();
   $config['per_page'] = 6; /*Jumlah data yang dipanggil perhalaman*/ 
   $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/
   
   /*Class bootstrap pagination yang digunakan*/
   
   $config['full_tag_open'] = "<center><ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
      $config['full_tag_close'] ="</ul></center>";
   $config['num_tag_open'] = '<li>';
   $config['num_tag_close'] = '</li>';
   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#' id='page-active'>";
   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
   $config['next_tag_open'] = "<li>";
   $config['next_tagl_close'] = "</li>";
   $config['prev_tag_open'] = "<li>";
   $config['prev_tagl_close'] = "</li>";
   $config['first_tag_open'] = "<li>";
   $config['first_tagl_close'] = "</li>";
   $config['last_tag_open'] = "<li>";
   $config['last_tagl_close'] = "</li>";
  
   $this->pagination->initialize($config);
   
   $data['halaman'] = $this->pagination->create_links();
   /*membuat variable halaman untuk dipanggil di view nantinya*/
   $data['offset'] = $offset;

   	$data['data'] = $this->news_model->view($config['per_page'], $offset);
	$data['titles'] = $this->news_model->getAll();
	$data['judul'] = "News!";
    $data['main'] = "news_view";     
		$this->load->view('template', $data);

   /*memanggil view pagination*/
  }

  function edit($url, $id){
    $datas = $this->news_model->getItemData($id);
   
    $data['item_data'] = $datas;
    $data['judul'] = "Edit News";
    $data['main'] = "edit_news_view";     
    $this->load->view('template', $data);
  }

  function delete($id){
    $datas = $this->news_model->deleteData($id);
    if ($datas == true){
     //$data['status'] = true;
      redirect($url, 'refresh');
    }
    else{
      //$data['status'] = false;
      redirect($this->uri->uri_string());
    }
  }

  function editSubmit(){
    if (isset($_FILES['userfile']) && !empty($_FILES['userfile'])) {
    $config['upload_path'] = './foto_berita/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['image_width']  = '0';
    $config['image_height']  = '0';
    $config['max_size']  = '3000';
    $config['remove_spaces']  = 'true';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
      $data = array(
      'judul_berita' => $this->input->post('judulBerita'),
       'Tanggal' => $this->input->post('tanggalBerita'),
       'isi_berita' => $this->input->post('isiBerita'),
       'foto_berita' => $dataUpload['file_name']
      );
      
      $success = $this->news_model->form_edit($this->input->post('ori_prod_cod'), $data);
      
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

      //$this->load->view('percobaan/upload_form', $error);

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
      $success = $this->news_model->form_edit($this->input->post('ori_prod_cod'), $data);
      
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
