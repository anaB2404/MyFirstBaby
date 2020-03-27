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
				<form class="form-horizontal" action="processa_data_config.php" method="post">
							<legend>Configurações de perfil</legend>
				<fieldset>
					
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Data de Nascimento</label>  
				  <div class="col-md-4">
					<input class="form-control" id="date" name="nasc" value="<?php echo $dados['data_nascimento']; ?>" type="text"/>
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
	