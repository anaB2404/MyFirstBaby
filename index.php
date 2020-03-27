<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

    <link rel="stylesheet" href="cssmyfirst/">
	
	<style>
		body{ background-image: linear-gradient(to right, rgba(84, 174, 232, 0.5), pink); }
	</style>
    <link rel="icon" href="imagens/icon.png">
	


	<!-- BIBLIOTECA DE ÍCONES -->
  


  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<!--<div id="mySidenav" class="sidenav">
			<img src="imagens/logo.gif" class="gif"/>
			<button class="btn-cadastrar btn btn-primary btn-block" onclick="seta()">
				Cadastre-se
				<i class="setinha fa fa-arrow-right"></i>
			</button>
		</div>-->
    <?php include 'navbar-semlog.php'; ?>
	<div class="container-fluid posicao banner" style="position:relative">
			</br></br>
			</br>
			<fieldset>
				<?php
					include 'slide_rotacao.html';
					include 'conjunto_postagens.php';
					
				?>
			</fieldset>
	</div>

	
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
