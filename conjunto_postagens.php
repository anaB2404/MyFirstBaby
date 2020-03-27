<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
		<title>Blog - Bootsnipp.com</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

	.ion-minus{
		padding:0px 10px;
	}

	.blog {

		padding:60px 0px;
		font-family: 'Raleway', sans-serif;
	}

	.blog .blog-column a{
		color: #5db4c0;
		text-decoration: none;
	}

	.blog  span {
		font-size: 17px;
		font-weight: 700;
	}

	.blog  .blog-detail {
		margin-top: 10px;
	}


		</style>

	</head>
	<body>
	<!--
		youtube:  https://www.youtube.com/channel/UCqlv40k1N0L9nsSrzL1OWwg/videos
		site:     http://www.templateindirr.com
	-->


	<?php
	include 'php/conexao.php';
	 include 'php/conexao.php';
                $query = "SELECT a.id_postagem,a.titulo,a.resumo,a.conteudo,a.data_hora,b.id_usuario,b.foto_perfil,a.imagem,b.nome as nome FROM postagem AS a INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario WHERE a.id_fk_tipo_usuario = 1 ORDER BY a.id_postagem DESC  ";
                $executa = mysqli_query($conexao,$query);

	?>
	<div class="container-fluid posicao banner" style="position:relative">
	<div class="blog">
			<div class="container" style="background-color:rgba(249,254,255,.6);">
			 <div class="col-md-8 col-lg-offset-5">
			   <h2 style="font-weight:bolder;margin-bottom:2%;"><span class="ion-minus"></span>Novidades<span class="ion-minus"></span></h2>
			  </div>
				<div class="row">
					 <div class="col-md-9 col-lg-offset-2 text-center">
						<p style="font-size:25px;">Fique por dentro das novidades no mundo do seu bebê! </p><br>
					 </div>
				</div>

			<div class="row">

					<div class="col-md-12 col-sm-6 col-xs-12" data-aos="fade-right">

				<?php 	while($dados = mysqli_fetch_assoc($executa)){?>


						<div class="col-md-3 col-xs-12">
							<img src="imagens/<?php echo $dados['imagem'] ?>" alt="" width="100%">
						</div>

						<div class="col-md-3 col-xs-12">
								<label style="font-size:20px;"><?php echo $dados['titulo'];  ?></span>
								<label style="font-size:12px;"><?php echo substr($dados['resumo'],0,300); echo"..." ?></label>
								<a class="btn btn-blog" href="ver_mais_semlog.php?id=<?php echo $dados['id_postagem'];?>">Ver mais</a>
						</div>

						<?php }?>

					</div>


			</div>
			</div>
	</div>
</div>

	<script type="text/javascript">

	</script>
	</body>

</html>
