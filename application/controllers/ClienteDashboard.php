<?php


class ClienteDashboard extends CI_Controller{

 

  function index(){

    // echo "Eu estou logado";
     if(empty($this->session->userdata['log'])){
    	   redirect(base_url().'login');
    	}   

  	 $this->load->view('Cliente/dashboard');
     
  }

function signOut(){

       $this->session->unset_userdata('log');
       redirect(base_url().'login');
  }


/*public function login(){
 if(!$this->session->userdata('login_id')){
        return redirect(base_url().'login');
           $this->load->view('Cliente/dashboard');
            }
  }*/

}
?>