<?php


 class gallery_model extends CI_Model  {
 
  
  function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  
   $query = $this->db->query(" SELECT * FROM Gallery LIMIT $offset, $num");
  return $query->result();
  
  }
 }

?>
