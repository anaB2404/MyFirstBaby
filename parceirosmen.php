<head>
	<title>
	My First Baby
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Icone Cant-->
 <link rel="icon" href="imagens/icon.png">

<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssmyfirst/utilp.css">
	<link rel="stylesheet" type="text/css" href="cssmyfirst/mainp.css">
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
	<div class="limiter">
		<div class="container-mensagem100">
			<div class="wrap-mensagem100">
				<div class="mensagem100-form-title" style="background-image: url(imagens/bg-01.jpg);">
					<span class="mensagem100-form-title-1">

					</span>
				</div>
				<div class="col-lg-8 col-md-offset-2">
									  <div class="account-holder2">
										  <h3>Trabalhe Conosco</h3>
										  <h4>Preencha os campos a baixo para que possamos entrar em contato<sup style="color:red">*</sup><h4>
										  <br>
										  <div class="social-btn">

										  </div>
										  <div class="row">
											  <form action="php/parceimen.php" method="post" role="navigation" data-toggle="validator">
											   <div class="col-lg-12 col-md-6 col-sm-6 col-xs-8">
													  <div class="form-group">
														  <label class="control-label required" for="name" > Nome: <sup style="color:red">*</sup></label>
														  <input name="nomes" type="text" class="form-control" placeholder="Digite o nome da empresa..." autocomplete="off" >
													  </div>
  													  <div class="form-group">
  														  <label class="control-label required" for="sobrenamo"> Email : <sup style="color:red">*</sup></label>
  														  <input name="emails" type="text" class="form-control" placeholder="Digite o email da empresa..." autocomplete="off" >
  													  </div>
													  <div class="form-group">
														  <label class="control-label required" for="semanas"> Telefone empresarial:  <sup style="color:red">*</sup></label>
														  <input name="telefones" type="number" class="form-control" placeholder="Digite o numero de telefone..." autocomplete="off" >
													  </div>
													    <div class="form-group">
														  <label class="control-label required" for="semanas"> Telefone Celular:  <sup style="color:red">*</sup></label>
														  <input name="telefonesc" type="number" class="form-control" placeholder="Digite o numero do celular..." autocomplete="off" >
													  </div>
                              <label class="control-label required" for="date">Mensagem:<sup style="color:red">*</sup></label>
							  <div class="form-group">
							  <label class="textarea-form-border">
                             <textarea rows="4" cols="30" name="mensagens" type="text" autocomplete="off" >
							 </textarea autocomplete="off" >
                              </div>
                          </div>
													</div>

					<div class="container-mensagem100-form-btn">
						<button class="mensagem100-form-btn">
							Enviar
						</button>
						<!-- É ISSO Q EU PESSO Q ARUUME PLEASE ANA
						<button class ="btn"><a href="#"></a>
						<div class = "drop-group">

						<span class = "caret" > </span>
						<a href="#" class="dropup-toggle" role="button">
						<ul class="dropup-button-container">
						<li><a href="#">demon</a></li>-->
							</ul>
								</div>
						</div>
						</button>

				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
<?php include 'rodape.php'?>
</html>
