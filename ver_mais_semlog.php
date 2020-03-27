
<html>
		<head>
<style>
		body{background-image: url(imagens/nuvem.jpg);}

		@font-face{
			font-family:Summer;
			src:url(fonts/'Summer'sVictoryOverSpring-TTF.ttf);
		}
	</style>

		</head>
		<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
			<?php
				include 'navbar-semlog.php';
				include 'php/conexao.php';
				$id = $_GET['id'];
				$query = "SELECT a.id_postagem,a.titulo,a.resumo,a.conteudo,a.imagem,a.data_hora,b.id_usuario,b.nome as nome,b.foto_perfil as foto_perfil FROM postagem AS a INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario where id_postagem = $id ORDER BY a.id_postagem ASC ";
				$execulta=mysqli_query($conexao,$query);
				$dados=mysqli_fetch_array($execulta);
			?>
			<br/><br/><br/>
			<br/><br/><br/>
			<div class="container">
			<div class="row">
					 <!-- HEADER -->
					<div class="header">

						<div class="triangulo"></div>
				<div class="container" style="background-color:white; margin-top:5%; box-shadow: 0 29px 32px -20px rgba(0,0,0,0.5), 0 4px 11px -3px rgba(0,0,0,0.25); border-radius:10px;">
						<div class="profile">
							<img class="photo-author icon" src="imagens/<?php echo $dados['foto_perfil']; ?>"/>
							 <h5 class="nome">por <?php echo  $dados["nome"];?></h5>
                                <p class="dat"><?php $d = explode(" ", $dados["data_hora"]);
                        $data = explode("-", $d[0]);
                        echo "$data[2]/$data[1]/$data[0] às $d[1]";
                        ?></p>
						</div>
						<h2 class="title"><?php echo $dados['titulo']; ?></h2>


					<!-- INFO -->
					<div class="row row-eq-height" >
						<div class="col-xs-10 text"style="font-family:Summer;"  >
						<img style="width:50%; height:50%; margin-left:25%; margin-bottom:5%; border:1px solid;" src="imagens/<?php echo $dados['imagem'];?>"/>
							<?php echo $dados['conteudo'];
							?>
						</div>
					</div>
				</div>
				</div>
			</div>
			</div>
			<br/><br/><br/>
			<br/><br/></br>
			<style>



            .row .row-eq-height{
				text-align:justify;
				margin-left:10vw;
				margin-right:-4vw;

				margin-top:5vw;
				font-size:20px;
				font-family:'Summer';


			}

			h2{
				margin-top:4%;

				text-align:center;
				font-weight:bolder;
				font-style:italic;
			}

			.profile .nome{
				margin-left:100px;
				margin-top:-140px;
			}

			.profile .dat{
				margin-left:90px;
				margin-top:-10px;
				font-size:10px;
			}

			.icon {
			  width: 64px;
			  border-radius: 40px;
			  margin-bottom: 90px;

			}

			</style>




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
