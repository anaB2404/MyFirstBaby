<head>
	<title>
	My First Baby
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Icone Cant-->
 <link rel="icon" href="imagens/icon.png">
 <link rel="stylesheet" href="css/validacao.css">
	<style>
	body{
	background-image: linear-gradient(to right, rgba(84, 174, 232, 0.5), pink);
	}
	</style>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssmyfirst/utilp.css">
	<link rel="stylesheet" type="text/css" href="cssmyfirst/mainp.css">
<!--===============================================================================================-->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<br><br><br><?php include 'navbar-semlog.php';?>
	<div class="limiter">
		<div class="container-mensagem100">
			<div class="wrap-mensagem100">
				<div class="mensagem100-form-title">
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
												<div id="envia-cadastrop">
	                      </div>
	                      <div class="msg-cadastrop"></div>
											  <form id="formCadastrop" action="" method="post" role="navigation" onkeyup="return verificarCadastroP();">
											   <div class="col-lg-12 col-md-6 col-sm-6 col-xs-8">
													  <div class="form-group">

														  <label class="control-label required" for="name" > Nome: <sup style="color:red">*</sup></label>
															<div id="msg-nomep" class="msg-cor"></div>
															<input id="input-nomep" name="nomes" type="text" class="form-control" placeholder="Digite o nome da empresa..." autocomplete="off" >
													  </div>
  													  <div class="form-group">

  														  <label class="control-label " for="sobrenamo"> Email : <sup style="color:red">*</sup></label>
																<div id="msg-email" class="msg-cor"></div>
															  <input id="input-email" name="emails" type="text" class="form-control" placeholder="Digite o email da empresa..." autocomplete="off" >
  													  </div>
													  <div class="form-group">

														  <label class="control-label required"  for="semanas"> Telefone empresarial:  <sup style="color:red">*</sup></label>
															<div id="msg-telefone" class="msg-cor"></div>
															<input id="input-telefone" name="telefones" type="text" class="form-control" placeholder="Digite o numero de telefone..." autocomplete="off" >
													  </div>
													    <div class="form-group">

														  <label class="control-label required" for="semanas"> Telefone Celular:  <sup style="color:red">*</sup></label>
															<div id="msg-celular" class="msg-cor"></div>
															<input id="input-celular" name="telefonesc" type="text" class="form-control" placeholder="Digite o numero do celular..." autocomplete="off" >
													  </div>
                              <label class="control-label required" for="date">Mensagem:<sup style="color:red">*</sup></label>
							  <div class="form-group">
							  <label class="textarea-form-border">
									<div id="msg-mensagem" class="msg-cor"></div>
                             <textarea id="input-mensagem" style="resize:none; width:112%;" rows="4" cols="30" name="mensagens" type="text" autocomplete="off" >
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

	<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/cadastro.js"></script>
</body>
  <footer class="containerr-fluidd text-center ">
        <a href="#myPage" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Copyright © My First Baby 2017. Todos os direitos reservados.</p>
		<ul class="fa-ul">
				  <li  class="carta"><span class="fa-li"><a id="carta1" href="#"><i class="fab fa-facebook-square"></a></i></span></li>
				  <li  class="carta"><span class="fa-li"><a id="carta2" href="#"><i class="fab fa-instagram"></a></i></span></li>
				  <li  class="carta"><span class="fa-li"><a id="carta3" href="#"><i class="fas fa-envelope"></a></i></span></li>
				</ul>
      </footer>

	  <style>



.containerr-fluidd{
    padding: 60px 50px;

}


/*Rodapé*/
footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f18cb4;
}

/*icones*/
	.fa-ul{
		float:right;
		font-size:23px;
		padding-top:2%;

		list-style:none;
		margin-left:10px;

	}

	.fa-ul span{
		margin-bottom:30%;
		margin-left:-440px;

	}

.carta{
		display:inline;
		padding:40px;

}
#carta1:hover{
	color:#3b5998;

}
#carta2:hover{
	color:#e4405f;
}
#carta3:hover{
	color:#c71610;
}

	  </style>
	   <script>
        $(document).ready(function(){
            // Adicionando uma rolagem suave para todos os links no link navbar + footer
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
           if (this.hash !== "") {
             event.preventDefault();
             var hash = this.hash;
              // Usando o método animate () do jQuery para adicionar uma página suave
             $('html, body').animate({
               scrollTop: $(hash).offset().top
             }, 1000, function(){
               window.location.hash = hash;
              });
            }
          });
          })
      </script>
</html>
