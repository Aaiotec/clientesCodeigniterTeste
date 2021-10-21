<?php


class Login_model extends CI_Model {

 
  function Logar($login, $senha)
  {

      $this->db->where('login',$login);
      $this->db->where('senha',$senha);
      $query=$this->db->get('login_cliente');

       $log=$query->row_array();

       return $log;
       
  }

 

}

?>