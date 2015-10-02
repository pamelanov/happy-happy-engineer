<?php
class news_upload_model extends CI_Model{
function __construct() {
parent::__construct();
}


function form_insert($data){

$this->db->insert('news', $data);
}


}
?>