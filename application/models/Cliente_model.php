<?php


class Cliente_model extends CI_Model {

 
  function create($formArray)
  {

      $this->db->insert('tabela_cliente',$formArray);
       
  }

   function listaCliente()
  {

      $cliente = $this->db->get('tabela_cliente')->result_array();
      return $cliente;
  }

  function updateClient($id,$array)
  {

       $this->db->where('id_cliente',$id);
      $this->db->update('tabela_cliente',$array);
   
      return $cliente;
  }

  function idClient($id)
  {
                $this->db->where('id_cliente',$id);
     $cliente = $this->db->get('tabela_cliente')->row_array();
    
      return $cliente;
  }
  function deleteClient($id)
  {
                $this->db->where('id_cliente',$id);
                $this->db->delete('tabela_cliente');
    
      return $cliente;
  }
}

?>