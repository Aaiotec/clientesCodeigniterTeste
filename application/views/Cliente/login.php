<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
    <div class="row">
	<div class="col-md-4 offset-md-4" style="padding: 50px;">
		<?php $ErrorMsg=$this->session->userdata('ErrorMsg');?>
		<?php if(!empty($ErrorMsg)) {?>
			<div class="alert alert-danger" role="alert">
				<?php echo $ErrorMsg;?>
			</div>
			<?php  } ?>
	
	
	<form action="<?php base_url().'login/index';?>" name="loginForm" id="loginForm" method="post">

			<h4>Informa os Dados</h4>		  
  <div class="form-group">
    <label for="exampleInputEmail1">Login:</label>
    <input type="text" class="form-control" id="login" value="<?php echo set_value('login');?>" name="login" placeholder="Informa o login...">
    <p><?php echo form_error('login');?></p>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha:</label>
    <input type="password" class="form-control" id="senha" value="<?php echo set_value('senha');?>" name="senha" placeholder="Informa a senha...">
    <p><?php echo form_error('senha');?></p>
  </div>

  <button type="submit" class="btn btn-primary btn-block btn-lg">Entrar</button>
</form>
			</div>
		</div>
	</div>

</body>
</html>