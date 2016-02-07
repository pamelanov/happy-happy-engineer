<?php


 class news_model extends CI_Model  {
 
  
  function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("news",$num, $offset);
  return $query->result();
  
  }
  
  function getAll()  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("news");
  return $query->result();
  
  }
 }

?>
