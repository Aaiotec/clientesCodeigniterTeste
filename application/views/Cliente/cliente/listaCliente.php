<?php $this->load->view('Cliente/include/header');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h1 class="h2">Listagem de Clientes</h1>
 <div class="col-md-1">
     <a href="<?php echo base_url().'cliente/addCliente/';?>" class="btn btn-primary">Novo</a>
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
            <th>Nome</th>
            <th>Apelido</th>
             <th>Observação</th>
             <th>Data Cadastro</th>
              <th width="200">Função</th>
          </tr>
            <?php if(!empty($tabela_cliente)){
          foreach ($tabela_cliente as $client){ 
            ?>
          <tr>
           <td><?php echo $client['id_cliente']?></td>
           <td><?php echo $client['nome_cliente']?></td>
           <td><?php echo $client['apelido_cliente']?></td>
           <td><?php echo $client['obs_cliente']?></td>
           <td><?php echo $client['created_at']?></td>
           <td> 
              <a href="<?php echo base_url().'cliente/editCliente/'.$client['id_cliente'];?>" class="btn btn-primary">Atualizar</a>
             <a href="#" onclick="deleteCliente(<?php echo $client['id_cliente'];?>);" class="btn btn-danger">Deletar</a>
           </td>
          </tr>
           <?php } 
         }else{

             ?>
              <tr>
           <td colspan="4">Não existe nenhum cliente</td>
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
    if (confirm("Tem certeza que deseja deletar este cliente?")) {

    window.location.href="<?php echo base_url().'cliente/deleteCliente/'?>"+id;

    } 
 }
  </script>