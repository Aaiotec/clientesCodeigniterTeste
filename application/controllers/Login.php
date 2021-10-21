<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
      $this->load->model('Login_model');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('login','Login','required');
      $this->form_validation->set_rules('senha','Senha','required');

        if ($this->form_validation->run()==false) {
      //  redirect('cliente');
      $this->load->view('Cliente/login');
      }else{
         $login=$this->input->post('login');
          $senha= $this->input->post('senha');
         $log=$this->Login_model->Logar($login,$senha);

if (!empty($log)) {
  $this->session->set_userdata('log',$log);
   redirect(base_url().'ClienteDashboard');
   
}else{

   $this->session->set_flashdata('ErrorMsg','Login ou senha incorreta.');
    redirect(base_url().'login');
}
          //print_r($log);
      }
  

  }


}

?>