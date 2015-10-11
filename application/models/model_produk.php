<?php


 class Model_produk extends CI_Model  {
 
  
  function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  

  
  $query = $this->db->get("Produk",$num, $offset);
  
  return $query->result();
  
  }
  
  function getItemData($id){
  
  $query = $this->db->query("Select * from Produk where ID_Produk = '$id'");
  
  return $query->result_array();
  
  }
  
  function deleteData($id){
   $query = $this->db->query("DELETE from Produk where ID_Produk ='$id'");
   
   return true;
  }
 }

?>
