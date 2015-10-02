<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

 class Men_collection extends CI_Controller {
 
 
  public function __Construct(){
   parent ::__construct();
   
   $this->load->model('men_col_model');
  
  }
  
  public function index()  {
  
   $this->view();
  }
  
  public function view($offset=0) {
  
   $jml = $this->db->get('Produk');
   
   $config['base_url'] = base_url().'index.php/men_collection/view';
   
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

   $data['data'] = $this->men_col_model->view($config['per_page'], $offset);
$data['judul'] = "Men Collection";
    $data['main'] = "men_collection_view";     
		$this->load->view('template', $data);

   /*memanggil view pagination*/
  }
  
 }

?>
