<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		
	</head>
	<body>
			<?php
				include "../navbarr.php";
				include '../php/conexao.php';
				
				$idusuario = $_SESSION["id_usuario_log"];
				$query="SELECT * FROM usuario where id_usuario = $idusuario";
				$query_bebe="SELECT * FROM bebe where id_fk_usuario = $idusuario";
				$execulta=mysqli_query($conexao,$query);
				$dados=mysqli_fetch_array($execulta);
			?>
			<div class="container">
				<form class="form-horizontal" action="processa_email_config.php" method="post">
							<legend>Configurações de perfil</legend>
				<fieldset>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Email atual:</label>  
					  <div class="col-md-4">
						<input id="textinput" name="emailatual" type="text"  value="<?php echo $dados['email']; ?>" class="form-control input-md">   
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Novo email:</label>  
					  <div class="col-md-4">
						<input id="textinput" name="email" type="text" class="form-control input-md">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Confirme o email:</label>  
					  <div class="col-md-4">
						<input id="textinput" name="emailconfirme" type="text" class="form-control input-md">
					  </div>
					</div>
					<div class="form-group">
				  <label class="col-md-4 control-label" for="singlebutton">                    </label>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-labeled btn-success">
								<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>  Alterar</button>
				  </div>
				</div>
				</fieldset>
				</form>
			</div>
			</div>
			</div>
	</body>
</html>

<style>
	.form-group{
		margin-right: 20%
	}
	.container{
		margin-top: 10%;
		
	}
	