<?php
class upload_gallery_model extends CI_Model{
function __construct() {
parent::__construct();
}


function form_insert($data){
    if ($this->db->insert('Gallery', $data)){
        return true;
    }

    else {
        return false;
    }
}

// function form_edit($ID, $data){
//     $this->db->where('ID_Produk', $ID);

//     if($this->db->update('Produk', $data)){
//         return true;
//     }
//     else return false;

// }


}
?>