<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Usuario extends CI_Controller {

public function index(){
   $this->load->model('Usuario_model');
    $usuario=$this->Usuario_model->listaUsuario();
    $dado=array();
    $dado['login_cliente']=$usuario;
   $this->load->view('Cliente/usuario/listaUsuario',$dado);
    }


  public function addUsuario(){ 
 
    $this->load->library('form_validation');
    $this->load->model('Usuario_model');
    $this->form_validation->set_rules('login','Login do usuário obrigatório','trim|required');
    $this->form_validation->set_rules('senha','Senha do usuário obrigatório','trim|required');

  
        if ($this->form_validation->run()==true) {
    
           $form_Array = array();
           $form_Array['login']=  $this->input->post('login');
           $form_Array['senha']= $this->input->post('senha');
        // $form_Array['login']= md5($this->input->post('login'))
           $this->Usuario_model->create($form_Array); //adiciona usuario na tabela
           $this->session->set_flashdata('success','Usuário cadastrado com sucesso'); 
           redirect(base_url().'usuario/index');
      }else{
         $this->load->view('Cliente/usuario/addUsuario');
      }

  }

public function editUsuario($id){ 
    
    $dado=array();
    $this->load->library('form_validation');
    $this->load->model('Usuario_model');
    $usuario=$this->Usuario_model->idUsuario($id);
      if (empty($usuario)) {
         $this->session->set_flashdata('success','Usuário não encontrado'); 
         redirect(base_url().'/usuario/index');
      }
    $this->form_validation->set_rules('login','Login do usuário','trim|required');
    $this->form_validation->set_rules('senha','Senha do usuário','trim|required');
   
  if ($this->form_validation->run()==true) {
    
           $form_Array = array();
           $form_Array['login']= $this->input->post('login');
           $form_Array['senha']= $this->input->post('senha');
       // $form_Array['senha']= md5($this->input->post('senha'))
           $this->Usuario_model->updateUsuario($id,$form_Array); //atualiza usuario na tabela
           $this->session->set_flashdata('success','Usuário atualizado com sucesso'); 
           redirect(base_url().'usuario/index');
      }else{
         $dado['usuario']= $usuario;
         $this->load->view('Cliente/usuario/editUsuario',$dado);
      }

  }

public function deleteUsuario($id){ 
           $this->load->model('Usuario_model');
           $usuario=$this->Usuario_model->idUsuario($id); 
       if (empty($usuario)) {
         $this->session->set_flashdata('success','Usuário não encontrado'); 
         redirect(base_url().'/usuario/index');
      }
          $usuario=$this->Usuario_model->deleteUsuario($id);
           $this->session->set_flashdata('success','Usuário eliminado com sucesso'); 
           redirect(base_url().'usuario/index');
  }
  
public function __construct(){ 
parent:: __construct();
 if(!$this->session->userdata('log'))
        return redirect(base_url().'login');
   
}

  }
?>