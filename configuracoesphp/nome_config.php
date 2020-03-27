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
				<form class="form-horizontal" action="processa_nome_config.php" method="post">
							<legend>Configurações de perfil</legend>
				<fieldset>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Alterar Nome</label>  
				  <div class="col-md-4">
				  <input id="textinput" name="nome" type="text"  value="<?php echo $dados['nome']; ?>" class="form-control input-md">
				   
				  </div>
				</div>
				  
				
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Alterar Sobrenome</label>  
				  <div class="col-md-4">
				  <input id="textinput" name="sobrenome" type="text" value="<?php echo $dados['sobrenome']; ?>" class="form-control input-md">
				   
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
	
	
	
</style>