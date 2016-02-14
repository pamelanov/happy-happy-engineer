<?php


 class news_model extends CI_Model  {
 
  
  function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("news",$num, $offset);
  return $query->result();
  
  }

  function getItemData($id){
  
  $query = $this->db->query("Select * from news where ID_News = '$id'");
  
  return $query->result_array();
  
  }
  
  function getAll()  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("news");
  return $query->result();
  
  }

  function deleteData($id){
   $query = $this->db->query("DELETE from news where ID_News ='$id'");
   
   return true;
  }
 }

?>
