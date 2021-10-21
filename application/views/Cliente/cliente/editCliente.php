<?php $this->load->view('Cliente/include/header');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h1 class="h2">Atualizar Cliente</h1>

      </div>
 <form name="clienteForm" id="clienteForm" action="<?php base_url().'cliente/editCliente/'.$cliente['id_cliente'];?>" method="post"> 
    <div class="form-group">
    <label for="nome_cliente">Nome:</label>

  <input type="text" name="nome_cliente" id="nome_cliente" value="<?php echo set_value('nome_cliente',$cliente['nome_cliente']);?>" class="form-control">

 <p class="help-block"><?php echo form_error('nome_cliente');?></p>
  </div>
    <div class="form-group">
    <label for="apelido">Apelido:</label>
  <input type="text" class="form-control" name="apelido_cliente" id="apelido_cliente" value="<?php echo set_value('apelido_cliente', $cliente['apelido_cliente']);?>">
     <p class="help-block"><?php echo form_error('apelido_cliente');?></p>
  </div>
   <label for="obs">Observação:</label>
  <textarea name="obs_cliente" id="obs_cliente" class="form-control" rows="5"> <?php echo set_value('obs_cliente',$cliente['obs_cliente']);?>

</textarea>

  <p class="help-block"><?php echo form_error('obs_cliente');?></p>
  <div style="text-align:right">
  <button type="submit" class="btn btn-success">Atualizar</button>
  <a href="<?php echo base_url().'cliente/index/';?>" class="btn btn-secondary">Cancelar</a>
 
  </div>
 </form>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
  <?php $this->load->view('Cliente/include/footer');?>