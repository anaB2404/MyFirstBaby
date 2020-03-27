<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
				$execulta=mysqli_query($conexao,$query_bebe);
				$dados=mysqli_fetch_array($execulta);
			?>
			<div class="container">
				<div id="envia-updatebb">
				</div>
				<div class="msg-updatebb"></div>
				<form data-toggle="validator" id="formUpdatebb" class="form-horizontal" action="" method="post" role="navigation" onkeyup="return verificarCadastroUpdateBB();">
							<legend>Configurações de perfil</legend>
				<fieldset>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Alterar Nome</label>
				  <div class="col-md-4">
						<div id="msg-nomebb" class="msg-cor"></div>
				  <input id="input-nomebb" name="nome" type="text"  value="<?php echo $dados['nome']; ?>" class="form-control input-md">
				  </div>
				</div>


				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Alterar Sobrenome</label>
				  <div class="col-md-4">
						<div id="msg-sobrenomebb" class="msg-cor"></div>
				  <input id="input-sobrenomebb" name="sobrenome" type="text" value="<?php echo $dados['sobrenome']; ?>" class="form-control input-md">

				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Sexo</label>
				  <div class="col-md-10">
						<?php if ($dados['sexo'] == 1) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1" checked >Feminino</label>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
				 <?php }elseif ($dados['sexo'] == 2) { ?>
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
					<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2"  checked >Masculino</label>
						<?php }else {?>
							<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
 						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
 						<?php } ?>
					</div>
				</div>

				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Data de Nascimento</label>
				  <div class="col-md-4">
						<div id="msg-databb" class="msg-cor"></div>
					<input class="form-control" id="input-databb" name="data" type="text" value="<?php echo $dados['data_nascimento']; ?>"/>
				  </div>
				</div>
			</fieldset>

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
