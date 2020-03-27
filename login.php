<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

    <link rel="stylesheet" href="cssmyfirst/cadastro.css">

    <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


  </head>
  <body>

	<!--	<div id="mySidenav" class="sidenav">
			<img src="imagens/logo.gif" class="gif"/>
			<button class="btn-cadastrar btn btn-primary btn-block" onclick="seta()">
				Cadastre-se
				<i class="setinha fa fa-arrow-right"></i>
			</button>
		</div>-->


		<div>

					<div class="banner">
					<?php include 'navbar-semlog.php'; ?>

						  <div class="space-medium">
						   <div class="container">
							  <div class="row">
								  <div class="col-lg-6 col-md-offset-4">
									  <div class="account-holder1">

										  <h3>Login</h3>


										 <div class="row" style="margin-top:12%;">
											  <form action="php/login.php" method="post" role="navigation" data-toggle="validator">
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <div class="form-group">
														  <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
														  <input id="email" name="logemail" type="text" class="form-control" placeholder="Digite seu email...">
													  </div>
												  </div>
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

													  <div class="form-group">

														  <label class="control-label required" for="senha">Senha<sup style="color:red">*</sup></label>
														  <input id="password" name="password" type="password" class="form-control" placeholder="Digite sua senha...">

													  </div>
													<!--  <a href="#" class="forgot-password"  style="margin-top:20px;">Esqueceu a senha?</a> -->
												  </div>
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <button class="btn btn-primary btn-block" style="margin-top:20px;">Entrar</button>
													  <div class="checkbox">
														  <!--<label style="margin-top:20px;">
															  <input type="checkbox" value="">

															  <p>Lembre-me</p>
                              </label>-->

													  </div>
												  </div>
											  </form>

										  </div>
									  </div>
								  </div>
								  <div class="frase" style="font-weight:bolder;margin-top: 10%;

									margin-top: 10vw;
									position:absolute;
									font-size:3em;
									margin-right:50vw;
									font-family:'MotiraItalic';">Que bom saber que estamos fazendo parte desta experiência tão maravilhosa !
									<div>
									<i class="far fa-heart"></i> </div>


</div>
					</div>



  </body>
</html>
