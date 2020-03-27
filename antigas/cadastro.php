<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="cssmyfirst/cadastro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>
  <body>

		<div id="mySidenav" class="sidenav">
			<img src="imagens/logo.gif" class="gif"/>
			<button class="btn-cadastrar btn btn-primary btn-block" onclick="seta()">
				Conheça-nos!
				<i class="setinha fa fa-arrow-right"></i>
			</button>
		</div>


		<div id="main">

					<div class="banner">
						 
						  <div class="sidebar" display="false"></div>

						  <div class="space-medium">
						  <div class="container">
							  <div class="row">
								  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									  <div class="account-holder1">
										   <!--login-form-->
										  <h3>Login</h3>


										  <div class="row">
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
													  <a href="#" class="forgot-password">Esqueceu a senha?</a>
												  </div>
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <button class="btn btn-primary btn-block">Entrar</button>
													  <div class="checkbox">
														  <label>
															  <input type="checkbox" value="">

															  <p>Lembre-me</p>
															   </label>

													  </div>
												  </div>
											  </form>
										  </div>
									  </div>
								  </div>
								   <!--/.login-form-->
										<!--sing-up-form-->
								  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									  <div class="account-holder2">
										  <h3>Cadastre-se</h3>
										  <br>
										  <div class="social-btn">

										  </div>
										  <div class="row">
											  <form action="php/cadastro.php" method="post" role="navigation" data-toggle="validator">
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <div class="form-group">
														  <label class="control-label required" for="name"> Nome<sup style="color:red">*</sup></label>
														  <input name="nome" type="text" class="form-control" placeholder="Digite seu nome...">
													  </div>
												  </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                              <div class="form-group">
                                  <label class="control-label required" for="name"> Sobrenome<sup style="color:red">*</sup></label>
                                  <input name="sobrenome" type="text" class="form-control" placeholder="Digite seu sobrenome...">
                              </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                              <div class="form-group">
                                <label class="control-label required" for="sexo">Sexo<sup style="color:red">*</sup></label>
                                <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
                                <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
                                <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="0">Indiferente</label>
                              </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                              <div class="form-group">
                                  <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
                                  <input  name="email" type="email" class="form-control" placeholder="Digite seu email...">
                              </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                              <div class="form-group">
                                  <label class="control-label required" for="date">Data de nascimento<sup style="color:red">*</sup></label>
                                  <input  name="datanasc" type="date" class="form-control">
                              </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                              <div class="form-group">
                                  <label class="control-label required" for="password">Senha<sup style="color:red">*</sup></label>
                                  <input id="password" name="senha" type="password" class="form-control" placeholder="Digite sua senha...">
                              </div>
                        </div>
                              <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                      <label class="control-label required" for="confirmpassword">Confirme a Senha<sup style="color:red">*</sup></label>
                                      <input id="confirmpassword" name="confirmsenha" type="password" class="form-control" placeholder="Digite novamente a senha...">
                                  </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <label class="control-label required" for="tipousuario">Você é:<sup style="color:red">*</sup></label>
                              <label class="control-label required radio-inline" for="tipousuario"><input type="radio" name="tipousuario" value="2">Mamãe/Papai</label>
                              <label class="control-label required radio-inline" for="tipousuario"><input type="radio" name="tipousuario" value="3">Gestante</label>
                              <label class="control-label required radio-inline" for="tipousuario"><input type="radio" name="tipousuario" value="4">Visitante</label>
                            </div>
                          </div>

												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <button class="btn btn-primary btn-block">Cadastre-se</button>
												  </div>
											  </form>
										  </div>
									  </div>

								  </div>
						  </div>

							  </div>
						  </div>
					</div>


		<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/javascript-site.js"></script>
  </body>
</html>
