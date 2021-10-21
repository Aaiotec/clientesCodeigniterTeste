<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Cliente extends CI_Controller {

public function index(){
   $this->load->model('Cliente_model');
    $cliente=$this->Cliente_model->listaCliente();
    $dado=array();
    $dado['tabela_cliente']=$cliente;
   $this->load->view('Cliente/cliente/listaCliente',$dado);
    }


  public function addCliente(){ 
 
    $this->load->library('form_validation');
    $this->load->model('Cliente_model');
    $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required');
    $this->form_validation->set_rules('apelido_cliente','Apelido do Cliente','trim|required');
    $this->form_validation->set_rules('obs_cliente','Observaçao do Cliente','trim|required');

  
        if ($this->form_validation->run()==true) {
    
           $form_Array = array();
           $form_Array['nome_cliente']=  $this->input->post('nome_cliente');
           $form_Array['apelido_cliente']= $this->input->post('apelido_cliente');
           $form_Array['obs_cliente']=  $this->input->post('obs_cliente');
           $form_Array['created_at']=  date('Y-m-d');
           $this->Cliente_model->create($form_Array); //adiciona cliente na tabela
           $this->session->set_flashdata('success','Cliente cadastrado com sucesso'); 
           redirect(base_url().'cliente/index');
      }else{
         $this->load->view('Cliente/cliente/addCliente');
      }

  }

public function editCliente($id){ 
    
    $dado=array();
    $this->load->library('form_validation');
    $this->load->model('Cliente_model');
    $cliente=$this->Cliente_model->idClient($id);
      if (empty($cliente)) {
         $this->session->set_flashdata('success','Cliente não encontrado'); 
         redirect(base_url().'/cliente/index');
      }
    $this->form_validation->set_rules('nome_cliente','Nome do Cliente','trim|required');
    $this->form_validation->set_rules('apelido_cliente','Apelido do Cliente','trim|required');
    $this->form_validation->set_rules('obs_cliente','Observaçao do Cliente','trim|required');

  if ($this->form_validation->run()==true) {
    
           $form_Array = array();
           $form_Array['nome_cliente']=$this->input->post('nome_cliente');
           $form_Array['apelido_cliente']= $this->input->post('apelido_cliente');
           $form_Array['obs_cliente']=$this->input->post('obs_cliente');
          
           $this->Cliente_model->updateClient($id,$form_Array); //atualiza cliente na tabela
           $this->session->set_flashdata('success','Cliente atualizado com sucesso'); 
           redirect(base_url().'cliente/index');
      }else{
         $dado['cliente']= $cliente;
         $this->load->view('Cliente/cliente/editCliente',$dado);
      }

  }

public function deleteCliente($id){ 
           $this->load->model('Cliente_model');
           $cliente=$this->Cliente_model->idClient($id); 
       if (empty($cliente)) {
         $this->session->set_flashdata('success','Cliente não encontrado'); 
         redirect(base_url().'/cliente/index');
      }
          $cliente=$this->Cliente_model->deleteClient($id);
           $this->session->set_flashdata('success','Cliente eliminado com sucesso'); 
           redirect(base_url().'cliente/index');
  }
  
public function __construct(){ 
parent:: __construct();
 if(!$this->session->userdata('log'))
        return redirect(base_url().'login');
   
}

  }
?>