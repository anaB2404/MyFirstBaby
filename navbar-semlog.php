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
      <link href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
      <link rel="icon" href="imagens/Logo_Perfeito.png">
      <link rel="icon" href="imagens/icon.png">


	<!-- BIBLIOTECA DE ÍCONES -->
<style>
		@font-face{
			font-family:Summer;
			src:url(fonts/'Summer'sVictoryOverSpring-TTF.ttf);
		}
		</style>
  </head>
  <body>



						  <nav class="navbar navbar-fixed-top navbar-outro" role="navigation">
						<div class="container-fluid">
      							<div class="navbar-header">
      							  <button type="button" class="navbar-toggle button">
      								<span class="sr-only">Toggle navigation</span>
      								<span class="icon-bar"></span>
      								<span class="icon-bar"></span>
      								<span class="icon-bar"></span>
      							  </button>

      							  <a class="navbar-brand" href="index.php">
      								<img alt="Brand" src="imagens/Logo_Perfeito.png" class="logom">
      							  </a>
                      <a class="navbar-brand" href="#" style="margin-top:18px; font-size:2em; margin-left:25px; font-family:MotiraItalic; font-weight:bolder; color:#ce5585; ">My First Baby</a>
      							</div>
      								<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      							   <ul class="nav navbar-nav button">
								   <li class="abaixa"><a href="index.php">Início</a></li>
        							  <li class="dropdown abaixa">
									  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="conteudo_saude _semlog.php">Saúde</a></li>
											<li><a href="conteudo_nutricao_semlog.php">Nutrição</a></li>
											<li><a href="tabela_sem_log.php">Vacinação</a></li>
										</ul>
									  </li>
        							  <li class="abaixa"><a href="conteudopapais_semlog.php">Papais</a></li>
        							  <li class="abaixa"><a href="parceirosmen_sem_log.php">Trabalhe conosco</a></li>
        							  <li class="abaixa"><a href="sobree.php">Sobre</a></li>
									  <li class="abaixa"><a href="cadastro.php">Cadastro</a></li>
									  <li class="abaixa"><a href="login.php">Login</a></li>
									  </ul>
      						  </div>
					</div>
						  </nav>
						  <div class="sidebar" display="false">
                <ul class="nav navbar-nav button">
             <li class="abaixa"><a href="feed_sem_log.php">Feed</a></li>
                 <li class="dropdown abaixa">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">Saúde</a></li>
               <li><a href="#">Nutrição</a></li>
               <li><a href="tabela_sem_log.php">Vacinação</a></li>
             </ul>
             </li>
                 <li class="abaixa"><a href="">Papais</a></li>
                 <li class="dropdown abaixa">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parceiros<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="cadastroparceiros_sem_log.php">Cadastro Parceiro</a></li>
               <li><a href="parceirosmen_sem_log.php">Proposta</a></li>
             </ul>
             </li>
                 <li class="abaixa"><a href="">Sobre</a></li>
             <li class="abaixa"><a href="index.php">Cadastro</a></li>
             <li class="abaixa"><a href="index.php">Login</a></li>
             </ul>
              </div>

              <style>

				@font-face {
					font-family: 'MotiraItalic';
					src: url('../fonts/MotiraItalic.eot');
					src: url('../fonts/MotiraItalic.eot') format('embedded-opentype'),
						 url('../fonts/MotiraItalic.woff2') format('woff2'),
						 url('../fonts/MotiraItalic.woff') format('woff'),
						 url('../fonts/MotiraItalic.ttf') format('truetype'),
						 url('../fonts/MotiraItalic.svg#MotiraItalic') format('svg');
				}

				.navbar-nav li a{   /* cor nas palavras do menu rosa */
				  color: #ce5585;
				  margin-bottom: 5px;
				  font-size: 30px;
				  font-weight:bolder;
				   font-family: 'MotiraItalic';
				}

			  .sidebar{
					visibility: hidden;

			  }
              @media screen and (max-width:768px){


				.sidebar {  /* efeito da esquerda pra direita menu responsivo */
					position:absolute;
					left: 0;
					width: 250px;
					height: 100%;
					background-color:	#F0F8FF;
					z-index: 8;
					top: 0;
					margin-left: -250px;
				  margin-bottom: 10px;
				  visibility:visible;
				}




                .sidebar .navbar-nav ul {
                  margin-top: 50px;
                }



                .navbar-nav li a img{   /* cor nas palavras do menu rosa */
                  margin-top: 40px;


                }

                .sidebar .navbar-nav li a:hover {  /* deixar o background do menu responsivo transparent */
                    background-color: inherit;
                    background-image: inherit;
                }

                .sidebar.navbar-nav li a:active{
                  background-color: inherit;
                  background-image: inherit;
                }

                .iconuser {
                  width: 64px;
                  margin-top: 15%;
                  border-radius: 40px;
                }



            }

              </style>


		<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/javascript-site.js"></script>

  </body>
</html>
