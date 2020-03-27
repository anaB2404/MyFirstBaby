<!DOCTYPE html>
<html lang="pt=br">
  <head>
      <title>
            My First Baby
      </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icon.png">
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

?>

<!--Container sobre-->
<br><br>
 <div class="frase" >Que bom saber que estamos fazendo parte desta experiência tão maravilhosa !"</div>
      <div id="app" class="container-fluid">

        <div class="row">
          <div class="col-sm-8">


            <h2>App</h2><br><br>


            <h4 class="text-center">EM DESENVOLVIMENTO...</h4><br>
              <p class="desce">O projeto MyFirstBaby tem como intuito auxiliar a vida dos pais e mães de
                primeira viagem, ou seja, pais que estão tendo filhos pela primeira vez.</p>
            </div>
            <div class="telefone">
              <span class="glyphicon glyphicon-phone logo"></span>
            </div>
          </div>
        </div>
        <div class="container-fluid bg-grey">
          <div class="row">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-heart-empty logo"></span>
            </div>
            <div class="col-sm-8">
              <h2>Missões</h2>
              <h4><strong>Missão:</strong>Ajudar na criação de bebês, com dicas diárias envolvendo saúde e bem-estar durante a primeira infância e
              durante a gestação!</h4>
              <p><strong>Visão:</strong>O desenvolvimento do bebê e saúde da mãe!</p>
            </div>
          </div>
        </div>

<!-- Container Serviços-->
  <div id="valores" class="container-fluid sobre">
    <div class="container-fluid text-center">
      <h2>Valores</h2>
      <h4>O que o My First Baby tem a oferecer</h4>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-info-sign logo-small"></span>
          <h4>Informações</h4>
          <p>O My First Baby tem :artigos relacionados à
            nutrição, pré-natal e saúde em geral,uma área contendo todas as informações
            do bebê e consultar as vacinas.</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-retweet logo-small"></span>
            <h4>Compartilhar</h4>
            <p>O My First Baby permite que você compartilhe suas experiências com outros usuários.</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-bell logo-small"></span>
            <h4>Notificações</h4>
            <p>Receba lembretes em forma de notificações.</p>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-calendar logo-small"></span>
            <h4>Calendário de Vacina</h4>
            <p>Consulte as vacinas a serem tomadas.</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-list-alt logo-small"></span>
            <h4>Matérias e Artigos</h4>
            <p>Você terá matérias e artigos disponibilizando dicas de saúde em geral.</p>
          </div>
          </div>
        </div>
      </div>
    </div>

<!--Sobre-->
      <div id="sobre" class="container-fluid">
        <div class="container text-center">
          <h2>Sobre</h2>
          <p><em>Sobre os integrantes do Projeto</em></p>
          <p>O site foi criado por seis pessoas, com base num projeto para o nosso trabalho de conclusão de curso. A ideia surgiu do nada, pensamos, discutimos, vimos se realmente seria algo que ajudaria as pessoas, e decidimos que sim, o My First Baby deveria ser criado. E foi, com todo o nosso esforço e dedicação.</p>
          <br>
          <div class="row">
            <div class="col-sm-4">
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

            <div class="col-sm-4">
			<ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/jose.jpg" class="img-circle person" alt="José Eduardo"></a>
					<ul class="dropdown-menu">
						<li><a href="#">17 anos, futuro cineastra.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>José Eduardo</h4></strong></p><br>
            </div>

            <div class="col-sm-4">
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

            <div class="col-sm-4">
			<ul class="nav navbar-nav button">
				<li class="dropdown abaixa">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:none;"><img src="img/silas.jpg" class="img-circle person" alt="Silas Santana">
              <ul class="dropdown-menu">
						<li><a href="#">17 anos, apaixonado por animes.</a></li>
					</ul>
			  </li>
			</ul>
			  <p><strong><h4>Silas Santana</h4></strong></p><br>
            </div>

            <div class="col-sm-4">
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

            <div class="col-sm-4">
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

<!-- CONTATO-->
        <div id="contato" class="container-fluidd">
          <div class="container-fluid">
            <h2>Entre em contato conosco</h2>
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                  </div>
                  <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                  </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Enviar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

<!--Rodapé-->
      <?php
	  include 'rodape.php';
?>
<!--Script de rolagem-->
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
</body>
</html>
