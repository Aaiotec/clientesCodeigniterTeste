<?php


class Usuario_model extends CI_Model {

 
  function create($formArray)
  {

      $this->db->insert('login_cliente',$formArray);
       
  }

   function listaUsuario()
  {

      $usuario = $this->db->get('login_cliente')->result_array();
      return $usuario;
  }

  function updateUsuario($id,$array)
  {

       $this->db->where('login_id',$id);
      $this->db->update('login_cliente',$array);
   
      return $usuario;
  }

  function idUsuario($id)
  {
                $this->db->where('login_id',$id);
     $usuario = $this->db->get('login_cliente')->row_array();
    
      return $usuario;
  }
  function deleteUsuario($id)
  {
                $this->db->where('login_id',$id);
                $this->db->delete('login_cliente');
    
      return $usuario;
  }
}

?>