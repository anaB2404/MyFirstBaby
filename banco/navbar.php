<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

      <link rel="icon" href="imagens/icon.png">
      <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="cssmyfirst/navbar.css">

      <link rel="icon" href="imagens/Logo_Perfeito.png">
      <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  </head>
  <body>

    <?php include 'php/conexao.php';

    session_start();
    //print_r($_SESSION);exit;
    if(isset($_SESSION["id_usuario"])){
      $idusuario =  $_SESSION["id_usuario"];
    }else{
        $idusuario =  $_SESSION["id_usuario_log"];
    }

          $query = "SELECT foto_perfil FROM usuario where id_usuario = $idusuario";
          $executa = mysqli_query($conexao,$query);
          $dados= mysqli_fetch_array($executa);

    ?>



						  <nav class="navbar navbar-fixed-top navbar-outro" role="navigation">
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle button" data-toggle="collapse" data-target="#bar1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="#">
								<img alt="Brand" src="imagens/patitas.png" class="logom">
							  </a>
							</div>
							<div class="collapse navbar-collapse navbar-right" id="bar1">
							  <ul class="nav navbar-nav button">
							  <li class="img"><img class="iconuser" src="imagens/<?php echo  $dados["foto_perfil"]; ?>" alt="Avatar"></li>
							  <li><a href="">Feed</a></li>
							  <li><a href="#">Saude</a></li>
							  <li><a href="#">Papais</a></li>
							  <li><a href="postar_adm.php">Postagem</a></li>
							  <li><a href="php/logout.php">Sair</a></li>
							</ul>
						  </div>
						  </nav>
						  <div class="sidebar" display="false"></div>



		<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/javascript-site.js"></script>
  </body>
</html>
