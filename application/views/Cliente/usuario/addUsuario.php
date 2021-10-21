<?php $this->load->view('Cliente/include/header');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Usuário</h1>


      </div>

 <form action="<?php base_url().'usuario/addUsuario';?>" method="post"> 
    <div class="form-group">
    <label for="login">Login:</label>
  <input type="text" class="form-control" name="login" id="login" value="<?php echo set_value('login');?>" placeholder="Login...">
 <P class="help-block"><?php echo form_error('login');?></P>
  </div>
    <div class="form-group">
    <label for="senha">Senha:</label>
  <input type="password" class="form-control" name="senha" id="senha" value="<?php echo set_value('senha');?>" placeholder="Senha...">
     <P class="help-block"><?php echo form_error('senha');?></P>
  </div>
 
  <div style="text-align:right">
  <button type="submit" class="btn btn-success">Salvar</button>
  <a href="<?php echo base_url().'usuario/index/';?>" class="btn btn-secondary">Cancelar</a>
  </div>
 </form>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  <?php $this->load->view('Cliente/include/footer');?>