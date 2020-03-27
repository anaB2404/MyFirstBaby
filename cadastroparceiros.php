<head>
	<title>
	My First Baby
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Icone Cant-->
 <link rel="icon" href="imagens/icon.png">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssmyfirst/util.css">
	<link rel="stylesheet" type="text/css" href="cssmyfirst/main.css">
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">
<!--===============================================================================================-->
</head>
<body>

<br><br><br><?php session_start();
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
 } ?>


<div class="container-fluid parceiro" style="position:relative">
	<div class="limiter">
		<div class="container-mensagem100">
			<div class="wrap-mensagem100">
				<div class="mensagem100-form-title" style="background-image: url(imagens/bg-01.jpg);">
					<span class="mensagem100-form-title-1">

					</span>
				</div>

				<div class="col-lg-12 col-md-12">


									  <div class="account-holder2">

										  <h3>Trabalhe Conosco - Cadastro de Parceiros</h3>
										  <br>
										  <div class="social-btn">
										  </div>

										  <div class="row">
											  <form action="php/cadastroparcei.php" method="post" role="navigation" data-toggle="validator">
											   <div class="col-lg-12 col-md-12 col-xs-12">
													  <div class="form-group">
														  <label class="control-label required" for="name" > Nome: <sup style="color:red">*</sup></label>
														  <input name="nomepa" type="text" class="form-control" placeholder="Digite seu nome..." autocomplete="off" >
													  </div>


  													  <div class="form-group">
  														  <label class="control-label required" for="namejuridic"> Nome Juridico : <sup style="color:red">*</sup></label>
  														  <input name="nomepaj" type="text" class="form-control" placeholder="Digite o nome da empresa..." autocomplete="off" >
  													  </div>
													  <div class="form-group">
														  <label class="control-label required" for="cnpj"> CNPJ:  <sup style="color:red">*</sup></label>
														  <input name="cnpjpa" type="number" class="form-control" placeholder="Digite o CNPJ..." autocomplete="off" >
													  </div>
													    <div class="form-group">
														  <label class="control-label required" for="telefone"> Telefone:  <sup style="color:red">*</sup></label>
														  <input name="telefonespa" type="number" class="form-control" placeholder="Digite o numero do telefone empresarial..." autocomplete="off" >
													  </div>
														<div class="">
														  <div class="form-group">
														  <label class="control-label required" for="email"> Email:  <sup style="color:red">*</sup></label>
														  <input name="emailpa" type="text" class="form-control" placeholder="Digite o email da empresa..." autocomplete="off" >
														</div>
														</div>
														<div class="">
													    <div class="form-group">
														  <label class="control-label required" for="senha"> Senha:  <sup style="color:red">*</sup></label>
														  <input name="senhapa" type="password" class="form-control" placeholder="Digite uma senha..." autocomplete="off" >
													  </div>
													  </div>
													    <div class="form-group">
														  <label class="control-label required" for="senhacon"> Confirme a senha:  <sup style="color:red">*</sup></label>
														  <input name="senhaconfirpa" type="password" class="form-control" placeholder="Confirme sua senha..." autocomplete="off" >
													  </div>
													  </div>
					<div class="container-mensagem100-form-btn">
						<button class="mensagem100-form-btn">
							Cadastrar
						</button>
						<div class="dropup lado">
			<button class="dropdown-toggle mensagem100-form-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Parceiros
				<span class="caret"></span>
			 </button>
			 <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
				 <li><a href="#"></a></li>
				 <li><a href="#"></a></li>
				 <li><a href="#">  </a></li>
				 <li role="separator" class="divider"></li>
				 <li><a href="#"> </a></li>
			 </ul>
		 </div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>
</div>

<style media="screen">
	.lado{
		margin-left: 200px;
		margin-top: -50px;
	}
</style>

</body>
<?php include 'rodape.php';?>
</html>
