<html>
		<head>
				<title>
					Configurações
				</title>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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

				$execulta_bebe=mysqli_query($conexao,$query_bebe);
				$dados_bebe=mysqli_fetch_array($execulta_bebe);
			?>
			<div class="container-fluid posicao banner" style="position:relative">
			<div class="container">
			  <div class="row">

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


				  <div class="panel panel-info">
					<div class="panel-heading">
					  <h3 class="panel-title">Dados Pessoais</h3>
					</div>
					<div class="panel-body">
					  <div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img  src="imagens/<?php echo $dados['foto_perfil']; ?>" class="img-circle img-responsive"/> </div>
						<div class=" col-md-9 col-lg-9 ">
						  <table class="table table-user-information">
							<tbody>
							  <tr>
								<td>Nome:</td>
								<td><?php echo $dados['nome']; ?></td>
							  </tr>
							  <tr>
								<td>Sobrenome:</td>
								<td><?php echo $dados['sobrenome']; ?></td>
							  </tr>
							  <tr>
								<td>Sexo:</td>
								<td><?php if($dados['sexo'] == 1){
									echo "Feminino";
								}else if($dados['sexo'] == 2){
									echo "Masculino";
								}else{
									echo "Indefinido";
								}
									?></td>
							  </tr>
							  <tr>
								<td>Data de Nascimento:</td>
								<td><?php echo $dados['data_nascimento']; ?></td>
							  </tr>

							  <tr>
								<td>Email:</td>
								<td><?php echo $dados['email'] ?></td>
							   </tr>
							   <tr>
								<td>Senha:</td>
								<td> <?php //echo $dados["senha"]; ?></td>
							   </tr>

								 <?php if($idtipousuario == 2){ ?>
								<tr>
									<td>
										<a href="configuracoes_paimae.php" class="btn btn-primary">Alterar</a>
									</td>
								</tr>
								<?php }else if($idtipousuario == 3){ ?>
									<tr>
										<td>
											<a href="configuracoes_gest.php" class="btn btn-primary">Alterar</a>
										</td>
									</tr>
									<?php } ?>
							</tbody>
						  </table>

						</div>
					  </div>
					</div>
					<?php if ($idtipousuario != 1) { ?>
					<div class="panel-heading">
					  <h3 class="panel-title">Dados do Bebê</h3>
					</div>
					<div class="panel-body">

					  <div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="imagens/<?php echo $dados_bebe['foto_bebe'] ?>" class="img-circle img-responsive"> </div>
						<div class=" col-md-9 col-lg-9 ">
						  <table class="table table-user-information">
							<tbody>
							  <tr>
								<td>Nome:</td>
								<td><?php echo $dados_bebe['nome'] ?></td>
							  </tr>
							  <tr>
								<td>Sobrenome:</td>
								<td><?php echo $dados_bebe['sobrenome'] ?></td>
							  </tr>
							  <tr>
								<td>Sexo:</td>
								<td><?php if($dados['sexo'] == 1){
									echo "Feminino";
								}else if($dados['sexo'] == 2){
									echo "Masculino";
								}else{
									echo "Indefinido";
								}
									?></td>
							  </tr>
							  <tr>
								<td>Data de Nascimento:</td>
								<td><?php echo $dados_bebe['data_nascimento'] ?></td>
							  </tr>
							  <tr>
									<td>
										<a href="configuracoes_bebe.php" class="btn btn-primary">Alterar</a>
									</td>
								</tr>
							</tbody>
						  </table>

						</div>
					  </div>
					</div>
					<?php }else{ ?>

						<div class="panel-heading">

						</div>
						<div class="panel-body">

						  <div class="row">
							<div class="col-md-3 col-lg-3 " align="center">  </div>
							<div class=" col-md-9 col-lg-9 ">

							</div>
						  </div>
						</div>
					<?php } ?>
					</div>
					</div>
					</div>
					</div>
					</div>

		</body>
		<?php include 'rodape.php';?>
</html>

<style>
		.container{
			margin-top: 10%;
		}
</style>
