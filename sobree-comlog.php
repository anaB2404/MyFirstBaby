<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <title>
            My First Baby
        </title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="cssmyfirst/style.css">
		<style>
		.font{
			font-family:'MotiraItalic';
		}
		</style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


	<?php  session_start();
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
    }else if($idtipousuario == 2 || $idtipousuario == 3 || $idtipousuario == 4) {
      include 'navbar_usuario.php';
    }else {
      include 'navbar-semlog.php';
    }
?>

		<!--Container sobre-->
		<div class="row" style="background-color:#F0F8FF">
			<div style="text-align:center; margin-top:10%;" class="sobrenos">
				Sobre nós
			</div>
				<div><img src="imagens/Logo_Perfeito.png" class="marca" style="margin-left:31%;">
				</div>
		</div>
		<div style="background-color:#fff; margin-top:1%;">
		<div class="flex-sobre">

		<table style="margin-top:3%;">
			<tr>
				<td><i class="far fa-newspaper"></i><h3 style="text-align:center; padding-left:8%;">Matérias e Artigos</h3></td>
				<td><i class="fas fa-syringe"></i><h3 style="text-align:center; padding-left:10%;">Carteira de vacinação</h3></td>
				<td><i class="fas fa-share-square"></i><h3 style="text-align:center; padding-left:10%;">Compartilhar</h3></td>
				<td><i class="fas fa-mars"></i><h3 style="text-align:center; padding-left:10%; margin-top:-10px;">Pais</h3></td>
			</tr>
			<tr>

				<td style="font-size:22px; width:20%; padding-left:1%;text-align:center">
					Temos matérias e artigos disponibilizando dicas de saúde em geral tirando todas suas dúvidas!
				</td>

				<td style="font-size:22px; width:20%; padding-left:2%; text-align:center;">
					Com a carteira de vacinação você pode consultar as vacinas que o bebê precisa tomar.
				</td>

				<td style="font-size:22px; width:20%; padding-left:2%; text-align:center;">
					O My First Baby permite que você compartilhe suas experiências com outros usuários.
				</td>

				<td style="font-size:22px; width:20%; padding-left:2%; text-align:center;">
					Um conteúdo exclusivo para os papais homens, com várias dicas que vão auxiliar nessa linda jornada!
				</td>

			<tr>
		</table></br><br></br><br>




		</div>
		</div>

<!--Sobre-->
		<div style="background-color:#fff; margin-top:1%;">
			<div style= "background-color: #ffb6c1;">
           <div style="text-align:center; background-color: #ffb6c1;" class="sobrenos">Quem somos</div>
          <div style="text-align:center;"> O site foi criado por seis pessoas, com base no nosso trabalho de conclusão de curso.</div>
          <br>
          <div class="row">
            <div class="col-sm-4" style="text-align:center;">
              <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/ana.jpg" class="img-circle person" alt="Ana Beatriz"></a>
					<ul class="dropdown-menu">
						<li><a href="#">17 anos, ama php</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>Ana Beatriz</h4></strong></p><br>
            </div>
            <div class="col-sm-4" style="text-align:center;">
              <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/jose.jpg" class="img-circle persom" alt="José Eduardo"></a>
					<ul class="dropdown-menu">
						<li><a href="#">17 anos, futuro cineastra.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>José Eduardo</h4></strong></p><br>
            </div>
			<div class="col-sm-4" style="text-align:center;">
            <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/luana.jpg" class="img-circle person" alt="Luana Sandes">
					<ul class="dropdown-menu">
						<li><a href="#">17 anos, estudante de jornalismo.</a></li>
					</ul>
			  </li>
			</ul>
			<p><strong><h4>Luana Sandes</h4></strong></p><br>
            </div>
            <div class="col-sm-4" style="text-align:center;">
             <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/silas.jpg" class="img-circle persom" alt="Silas Santana">
              <ul class="dropdown-menu">
						<li><a href="#">17 anos, apaixonado por animes.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>Silas Santana</h4></strong></p><br>
            </div>
            <div class="col-sm-4" style="text-align:center;">
              <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/stefany.jpg" class="img-circle person" alt="Stefany Gabriel">
              <ul class="dropdown-menu">
						<li><a href="#">16 anos, futura médica veterinária.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>Stefany Gabriel</h4></strong></p><br>
            </div>
            <div class="col-sm-4" style="text-align:center;">
              <ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/thalita.jpg" class="img-circle person" alt="Thalita Amaje">
              <ul class="dropdown-menu">
						<li><a href="#">17 anos, futura analista de sistemas.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>Thalita Amaje</h4></strong></p><br>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>

	<!-- APP-->


		<div style="background-color:#8d8dff; margin-top:1%;padding:2%">
			<div style="text-align:center; font-size:3em; font-weight:bolder; margin-top:1px; ;font-family:'MotiraItalic'" >App em desenvolvimento . . . <i class="fas fa-cogs"></i></div>
			<div style="font-size:22px; padding-top:10; position:relative; margin-top:39px;margin-bottom:25px;text-align:center;">Além da plataforma web, o My First Baby será lançado também como um aplicativo, para que você, usuário, possa se conectar quando e onde estiver!</div>

			<div><i class="fas fa-mobile-alt"></i><i style="margin-left:75%;" class="fas fa-mobile-alt"></i></div>

		</div>
		<!-- CONTATO-->
            <div  class="sobrenos" style="text-align:center;  background-color: #F0F8FF; padding-top:0%;font-family:'MotiraItalic'" >Nos mande uma mensagem!</div>
			<div style="text-align:center;  background-color: #F0F8FF; padding-top:0%;" >
            <div class="row"></div>
              <div style="margin-left:2em; margin-top:1.5vw; font-size:1.5vw;" class="col-md-5">
                <p style="margin-top:-3%;"><span class="glyphicon glyphicon-map-marker"></span> SÃO PAULO, BR</p>
                <p><span class="glyphicon glyphicon-phone"></span> +55 (11)5562-8975</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myfirstbaby.etec@gmail.com</p>
              </div>
			    <!--<span class="glyphicon glyphicon-heart-empty logo"></span>-->
              <div style="margin-left:60%;">
			  <div class="col-sm-6"></div><br><br>
			  <form action="enviar.php" method="post">
                <div class="row">
                  <div class="col-md-8 col-md-offset-1 form-group" class="formulario" style="margin-top:-8%;">
                    <input  class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                  </div></br>
                  <div class="col-md-8 col-md-offset-1 form-group" style="margin-top:-5%;">
                    <input  class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                  </div></br>

               <div class="col-md-8 col-md-offset-1" style="margin-top:-2%;"> <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5" required></textarea><br></div>
                  <div>
                   <div class="botao col-md-10 col-md-offset-1" style="margin-top:-8%;"> <button class="btn btn pull-right" type="submit" style="background-color:#a4c8e2;" required>Enviar</button></div>
                  </div>
                </div>
				</form>
              </div>

          </div>
          </div>

          <style media="screen">


          </style>
 <!--<div class="frase" style="font-weight:bolder;margin-top: 10%;
   	margin-bottom: 10%;
   	font-size:3em;
   	color:;
   	text-align: center;
   	font-family:'MotiraItalic';">Que bom saber que estamos fazendo parte desta experiência tão maravilhosa !</div>-->

<!--Rodapé-->



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
