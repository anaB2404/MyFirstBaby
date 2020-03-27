<html>
	<head>

		<link rel="stylesheet" href="css/validacao.css">
	</head>
	<body>
			<?php
			session_start();
			//print_r($_SESSION);exit;
			if(isset($_SESSION["id_usuario"])){
				$idusuario =  $_SESSION["id_usuario"];
			}else{
					$idusuario =  $_SESSION["id_usuario_log"];
			}

			//  echo print_r($_SESSION);
				if(isset($_SESSION["tipo_usuario"])){
				 $idtipousuario =  $_SESSION["tipo_usuario"];
			 }else{
					 $idtipousuario =  $_SESSION["fk_tipo_usuario"];
			 }

			 if ($idtipousuario == 1) {
				 include  'navbarr.php';
			 }else {
				 include 'navbar_usuario.php';
			 }


				include 'php/conexao.php';

				$query="SELECT * FROM usuario where id_usuario = $idusuario";
				$query_bebe="SELECT * FROM bebe where id_fk_usuario = $idusuario";
				$execulta=mysqli_query($conexao,$query);
				$dados=mysqli_fetch_array($execulta);
			?>
			<div class="container">
				<div id="envia-update">
				</div>
				<div class="msg-update"></div>
				<form data-toggle="validator" id="formUpdate" class="form-horizontal" action="" method="post" role="navigation" onkeyup="return verificarCadastroUpdate();">
							<legend>Configurações de perfil</legend>
				<fieldset>
				<!-- Text input-->
				<div class="form-group">

				  <label class="col-md-2 control-label" for="textinput">Alterar Nome</label>
				  <div class="col-md-4">
						  <div id="msg-nomeu" class="msg-cor"></div>
				  <input id="input-nomeu" name="nome" type="text"  value="<?php echo $dados['nome']; ?>" class="form-control input-md">

				  </div>
				</div>


				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Alterar Sobrenome</label>
				  <div class="col-md-4">
						<div id="msg-sobrenomeu" class="msg-cor"></div>
				  <input  id="input-sobrenomeu" name="sobrenome" type="text" value="<?php echo $dados['sobrenome']; ?>" class="form-control input-md">

				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Sexo</label>
				  <div class="col-md-10">
						<?php if ($dados['sexo'] == 1) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1" checked >Feminino</label>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0">Indiferente</label>
				 <?php }elseif ($dados['sexo'] == 2) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
					<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2"  checked >Masculino</label>
					<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0">Indiferente</label>
						<?php }else {?>
							<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
 						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
 						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0"   checked >Indiferente</label>
						<?php } ?>
					</div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Data de Nascimento</label>
				  <div class="col-md-4">
						<div id="msg-dataupdate" class="msg-cor"></div>
					<input class="form-control" id="input-dataupdate" name="nasc" value="<?php echo $dados['data_nascimento']; ?>" type="text"/>
				  </div>
				</div>

				<?php if ($dados["fk_id_tipo_usuario"] != 1){  ?>
				<div class="form-group">
					<label class="col-md-2 control-label" for="textinput">Tipo de usuario</label>
					<div class="col-md-10">
						<?php if ($dados['fk_id_tipo_usuario'] == 2) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="2"  >Gestante</label>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="3" checked>Mamãe/Papai</label>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="4">Visitante</label>
				 <?php }else if ($dados['fk_id_tipo_usuario'] == 3) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="2" checked >Gestante</label>
					<label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="3">Mamãe/Papai</label>
					<label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="4">Visitante</label>
						<?php }else {?>
							<label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="2"  >Gestante</label>
							<label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="3">Mamãe/Papai</label>
							<label class="control-label required radio-inline" for="sexo"><input type="radio" name="tipouser" value="4" checked>Visitante</label>
						<?php } ?>
					</div>
				</div>
				<?php } ?>



			</fieldset>


				<fieldset>
				<div class="form-group">
				<legend>Configurações de conta</legend>
				  <label class="col-md-4 control-label" for="textinput">Email atual</label>
				  <div class="col-md-4">
				  <input id="textinput" name="email_atual" type="email" value="<?php echo $dados['email']; ?>" class="form-control input-md" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Alterar Email</label>
				  <div class="col-md-4">
						<div id="msg-email" class="msg-cor"></div>
				  <input required id="input-email" name="email" type="email"  class="form-control input-md" value="<?php echo $dados['email']; ?>">
				  <span class="help-block">Digite aqui seu novo email</span>
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Senha Atual</label>
				  <div class="col-md-4">
					<input id="passwordinput" name="senha_atual" type="password" placeholder="Senha Atual" class="form-control input-md" value="<?php echo $dados['senha']; ?>">

				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Nova Senha</label>
				  <div class="col-md-4">
						  <div id="msg-senhau" class="msg-cor"></div>
					<input id="input-senhau"  name="nova_senha" type="password" placeholder="Nova Senha" class="form-control input-md" value="<?php echo $dados['senha']; ?>">

				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Repita a senha</label>
				  <div class="col-md-4">
						  <div id="msg-csenhau" class="msg-cor"></div>
					<input  id="input-csenhau" name="repita_senha" type="password" placeholder="Repita sua senha" class="form-control input-md" value="<?php echo $dados['senha']; ?>">

				  </div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">


				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton">                    </label>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-labeled btn-success">
								<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>  Alterar</button>
				  </div>
				</div>


				<div class="form-group">
				  <div class="col-md-4">
					<div class="row">
						<h2>  <div class="col-md-12">


						<br /></h2>
							 </div>
					</div>
				  </div>
				</fieldset>

				</form>
			</div>
			</div>


			<div class="col-md-4">
							<a href="php/excluir_conta.php?id=<?php echo  $dados['id_usuario'];?>" class="btn btn-red btn-circle">
					<button type="submit" class="btn btn-labeled btn-success">
								<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> Excluir Conta</button>
					</a>
							</div>

							<style>
								.form-group{
									margin-right: 20%
								}
								.container{
									margin-top: 10%;

								}



							</style>




							<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js" type="text/javascript"></script>
              <script type="text/javascript" src="js/cadastro.js"></script>


	</body>
</html>
