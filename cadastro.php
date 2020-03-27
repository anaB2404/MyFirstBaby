<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

    <link rel="stylesheet" href="cssmyfirst/cadastro.css">
    <link rel="stylesheet" href="css/validacao.css">
    <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


  </head>
  <body>

		<div>

					<div class="banner">
					<?php include 'navbar-semlog.php'; ?>



						  <div class="space-medium">
						  						<!-- Teste -->
						<div class="container-fluid">
							<div class="row" style="margin-bottom: 10px;">
								<!-- Cadastre-se-->
								<div class="col-md-6">
									<!-- Div de responsividade -->
									<div class="col-md-1"></div>

										<!--Conteudo do cadastro -->
										<div class="col-md-10" style="background-color: rgba(255,255,255,.5); border-radius:10px;">
                      <div id="envia-cadastro">
                      </div>
                      <div class="msg-cadastro"></div>
											<form id="formCadastro" action="" method="post" role="navigation" onkeyup="return verificarCadastro();">

											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

												<div class="form-group">
													<label class="control-label" for="name"> Nome<sup style="color:red">*</sup></label>
                          <div id="msg-nome" class="msg-cor"></div>
                          <input id="input-nome" name="nome" type="text" class="form-control" placeholder="Digite seu nome...">
												</div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												  <div class="form-group">

													  <label class="control-label" for="name"> Sobrenome<sup style="color:red">*</sup></label>
                            <div id="msg-sobrenome" class="msg-cor"></div>
                            <input id="input-sobrenome" name="sobrenome" type="text" class="form-control" placeholder="Digite seu sobrenome...">
												  </div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												  <div class="form-group">
													<label class="control-label" for="sexo">Sexo<sup style="color:red; margin-right: 10px;">* </sup></label>
													<input type="radio" id="rFeminino" name="sexo" value="1"> <label for="rFeminino">Feminino</label>
													<input type="radio" id="rMasculino" name="sexo" value="2"> <label for="rMasculino">Masculino</label>
													<input type="radio" id="rIndefinido" name="sexo" value="0"> <label for="rIndefinido">Indefinido</label>
												  </div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												  <div class="form-group">

													  <label class="control-label" for="email">Email<sup style="color:red">*</sup></label>
                            <div id="msg-email" class="msg-cor"></div>
													  <input  id="input-email" name="email" type="email" class="form-control" placeholder="Digite seu email...">
												  </div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												  <div class="form-group">

													  <label class="control-label" for="date">Data de nascimento<sup style="color:red">*</sup></label>
                            <div id="msg-data" class="msg-cor"></div>
													  <input  id="input-data" type="text" name="data" class="form-control">
												  </div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												  <div class="form-group">

													  <label class="control-label" for="password">Senha<sup style="color:red">*</sup></label>
                            <div id="msg-senha" class="msg-cor"></div>
                            <input  id="input-senha" name="senha" type="password" class="form-control" placeholder="Digite sua senha...">
												  </div>
											</div>
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <div class="form-group">

														  <label class="control-label" for="confirmpassword">Confirme a Senha<sup style="color:red">*</sup></label>
                              <div id="msg-csenha" class="msg-cor"></div>
                              <input id="input-csenha" name="confirmsenha" type="password" class="form-control" placeholder="Digite novamente a senha...">
													  </div>
											  </div>
											  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
												<div class="form-group">
												  <label class="control-label" for="tipousuario">Você é:<sup style="color:red">*</sup></label>
												  <input type="radio" id="rMamaePapai" name="tipousuario" value="2"> <label for="rMamaePapai">Mamãe/Papai</label>
												  <input type="radio" id="rGestante" name="tipousuario" value="3"> <label for="rGestante">Gestante</label>
												  <input type="radio" id="rVisitante" name="tipousuario" value="4"> <label for="rVisitante">Visitante</label>
												</div>
											  </div>

											  <button class="btn btn-primary btn-block" style="margin-bottom: 20px;" id="envio">Cadastre-se</button>
											</form>
										</div>

									<!-- Div de responsividade -->
									<div class="col-md-1"></div>


								</div>

								<!-- junte-se a nos -->
								<div class="col-md-6">
									<div class="row" style="text-align:center; margin-top: 15vh;">
										<div class="col-md-12">
											<label class="junte">Junte-se a nós!</label>
										</div>
										<div class="col-md-12" style="margin-top: -50px;">
											<img class="img-responsive" src="imagens/Logo_Perfeito.png" />
										</div>
									</div>
								</div>
							</div>
						</div>






</div>
										  </div>
									  </div>

								  </div>

						  </div>
              <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js" type="text/javascript"></script>
              <script type="text/javascript" src="js/cadastro.js"></script>




  </body>
</html>
