<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>
  <link rel="stylesheet" href="cssmyfirst/cadastromp.css">
  <link rel="stylesheet" href="css/validacao.css">


    <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>
  <body>


					<div class="banner">
						  <?php include 'navbar-semlog.php'; ?>


								  <div class="col-lg-5 col-md-offset-4 ">
									  <div class="account-holder2">
										  <h3>Mamãe/Papai</h3>
										  <br>
										  <div class="social-btn">

										  </div>
										  <div class="row">
                        <div id="envia-cadastromp">
                        </div>
                        <div class="msg-cadastromp"></div>
											  <form id="formCadastromp" action="" method="post" role="navigation" onkeyup="return verificarCadastroMP();">
												  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-4">
													  <div class="form-group">

														  <label class="control-label required" for="name"> Qual é o nome do bebê: <sup style="color:red">*</sup></label>
                              <div id="msg-nomemp" class="msg-cor"></div>
                              <input id="input-nomemp" name="nomebb" type="text" class="form-control" placeholder="Digite o nome do bebê...">
													  </div>
                            <div class="">
  													  <div class="form-group">

  														  <label class="control-label required" for="sobrenamo"> Sobrenome : <sup style="color:red">*</sup></label>
                                <div id="msg-sobrenomemp" class="msg-cor"></div>
                                <input id="input-sobrenomemp" name="sobrenomebb" type="text" class="form-control" placeholder="Digite o sobrenome do bebê...">
  													  </div>

                          <div class="">
                              <div class="form-group">
                                <label class="control-label required" for="sexo">Sexo<sup style="color:red">*</sup></label>
                                <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="1">Feminino</label>
                                <label class="control-label required radio-inline" for="sexo"><input type="radio" name="sexo" value="2">Masculino</label>
                                </div>
                          </div>
                          <div class="">
                              <div class="form-group">

                              <label class="control-label required" for="date">Que dia o bebê nasceu?<sup style="color:red">*</sup></label>
                              <div id="msg-datamp" class="msg-cor"></div>
                              <input id="input-datamp" type="text" name="bebezin" class="form-control">
                              </div>
                          </div>
												  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
													  <button class="btn btn-primary btn-block"  type="submit" name="vai">Concluir</button>
												  </div>
											  </form>
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
