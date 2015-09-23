<?php
Class Login_model extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('ID_User, Password');
   $this -> db -> from('Administrator');
   $this -> db -> where('ID_User', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>