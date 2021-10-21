<?php $this->load->view('Cliente/include/header');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h1 class="h2">Atualizar Usuário</h1>

      </div>
 <form name="usuarioForm" id="usuarioForm" action="<?php base_url().'usuario/editUsuario/'.$usuario['login_id'];?>" method="post"> 
    <div class="form-group">
    <label for="login">Login:</label>

  <input type="text" name="login" id="login" value="<?php echo set_value('login',$usuario['login']);?>" class="form-control">

 <p class="help-block"><?php echo form_error('login');?></p>
  </div>
    <div class="form-group">
    <label for="apelido">Senha:</label>
  <input type="password" class="form-control" name="senha" id="senha" value="<?php echo set_value('senha', $usuario['senha']);?>">
     <p class="help-block"><?php echo form_error('senha');?></p>
  </div>

  <div style="text-align:right">
  <button type="submit" class="btn btn-success">Atualizar</button>
  <a href="<?php echo base_url().'usuario/index/';?>" class="btn btn-secondary">Cancelar</a>
 
  </div>
 </form>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
  <?php $this->load->view('Cliente/include/footer');?>