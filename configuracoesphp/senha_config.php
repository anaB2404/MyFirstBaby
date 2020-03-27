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
				<form class="form-horizontal" action="processa_sexo_config.php" method="post">
							<legend>Configurações de perfil</legend>
				<fieldset>
					<div class="form-group">
						<label class="col-md-2 control-label" for="textinput">Sexo</label>  
						<div class="col-md-10">
						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
						<label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0">Indefinido</label>
					</div>
					<br/>
					<div class="col-md-4">
					<button type="submit" class="btn btn-labeled btn-success">
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
	