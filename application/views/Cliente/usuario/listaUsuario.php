<?php $this->load->view('Cliente/include/header');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h1 class="h2">Listagem de Usuário</h1>
 <div class="col-md-1">
     <a href="<?php echo base_url().'usuario/addUsuario/';?>" class="btn btn-success">Novo</a>
  </div>
  </div>

   <?php $success=$this->session->userdata('success');?>
    <?php if(!empty($success)) {?>
      <div class="alert alert-success" role="alert">
        <?php echo $success;?>
      </div>
      <?php  } ?>
      <div class="table-responsive">
        <table class="table table-striped">
          <tr>
            <th>Código</th>
            <th>Login</th>
            <th>Senha</th>
              <th width="200">Função</th>
          </tr>
            <?php if(!empty($login_cliente)){
          foreach ($login_cliente as $login){ 
            ?>
          <tr>
           <td><?php echo $login['login_id']?></td>
           <td><?php echo $login['login']?></td>
           <td><?php echo $login['senha']?></td>
         
           <td> 
              <a href="<?php echo base_url().'usuario/editUsuario/'.$login['login_id'];?>" class="btn btn-success">Atualizar</a>
             <a href="#" onclick="deleteCliente(<?php echo $login['login_id'];?>);" class="btn btn-danger">Deletar</a>
           </td>
          </tr>
           <?php } 
         }else{

             ?>
              <tr>
           <td colspan="4">Não existe nenhum usuário</td>
          </tr>
           <?php
           } 

             ?>  
        </table>

      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  <?php $this->load->view('Cliente/include/footer');?>

  <script type="text/javascript">
    function deleteCliente(id){
    if (confirm("Tem certeza que deseja deletar este usuário?")) {

    window.location.href="<?php echo base_url().'usuario/deleteUsuario/'?>"+id;

    } 
 }
  </script>