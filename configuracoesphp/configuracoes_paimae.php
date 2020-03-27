<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		
	</head>
	<body>
			<?php
				include "navbarr.php";
				include 'php/conexao.php';
				
				$idusuario = $_SESSION["id_usuario_log"];
				$query="SELECT * FROM usuario where id_usuario = $idusuario";
				$query_bebe="SELECT * FROM bebe where id_fk_usuario = $idusuario";
				$execulta=mysqli_query($conexao,$query);
				$dados=mysqli_fetch_array($execulta);
			?>
			<div class="container">
				<form class="form-horizontal" action="php/configuracoes_paimae.php" method="post">
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
				
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Sexo</label>  
				  <div class="col-md-10">
					 <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
                     <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
                     <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0">Indiferente</label>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-2 control-label" for="textinput">Data de Nascimento</label>  
				  <div class="col-md-4">
					<input class="form-control" id="date" name="nasc" value="<?php echo $dados['data_nascimento']; ?>" type="text"/>
				  </div>
				</div>
			</fieldset>	
				
				
				<fieldset>
				<div class="form-group">
				<legend>Configurações de conta</legend>
				  <label class="col-md-4 control-label" for="textinput">Email atual</label>  
				  <div class="col-md-4">
				  <input id="textinput" name="email_atual" type="text" value="<?php echo $dados['email']; ?>" class="form-control input-md">
				  <span class="help-block">Digite aqui seu email atual</span>  
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-md-4 control-label" for="textinput">Alterar Email</label>  
				  <div class="col-md-4">
				  <input id="textinput" name="novo_email" type="text"  class="form-control input-md">
				  <span class="help-block">Digite aqui seu novo email</span>  
				  </div>
				</div>
				
				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Senha Atual</label>
				  <div class="col-md-4">
					<input id="passwordinput" name="senha_atual" type="password" placeholder="Senha Atual" class="form-control input-md">
					
				  </div>
				</div>
				
				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Nova Senha</label>
				  <div class="col-md-4">
					<input id="passwordinput" name="nova_senha" type="password" placeholder="Nova Senha" class="form-control input-md">
					
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Repita a senha</label>
				  <div class="col-md-4">
					<input id="passwordinput" name="repita_senha" type="password" placeholder="Repita sua senha" class="form-control input-md">
					
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