<?php include("php/conexao.php");
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_postagens = "SELECT * FROM postagem";
$resultado_postagem = mysqli_query($conexao, $result_postagens);

//Contar o total de cursos
$total_postagens = mysqli_num_rows($resultado_postagem);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_postagens/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_postagens = "SELECT * FROM postagem WHERE id_fk_categoria = 4 ORDER BY id_postagem DESC limit $incio, $quantidade_pg";
$resultado_postagem = mysqli_query($conexao, $result_postagens);
$total_postagem = mysqli_num_rows($resultado_postagem);

$categoria = 4;
$query_slide = "SELECT a.id_postagem,a.titulo,a.conteudo,a.resumo,a.imagem,a.data_hora,a.id_fk_categoria,b.id_usuario,b.nome as nome,b.foto_perfil as foto_perfil FROM postagem AS a INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario where id_fk_categoria = $categoria ORDER BY a.id_postagem DESC limit $incio, $quantidade_pg";
$execultar=mysqli_query($conexao,$query_slide);
$dados_slide = mysqli_fetch_array($execultar);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Papais</title>


	</head>
	<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="background-image: linear-gradient(to right, rgba(84, 174, 232, 0.5), pink);">
		<?php include 'navbar-semlog.php'; ?>

		<br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/>
		<?php


		include 'slide_papais.html';
		//$dados = mysqli_fetch_assoc($resultado_postagem);
		?>

		<div class="container-fluid posicao banner" style="position:relative">
	<div class="blog">
			<div class="container" style="background-color:rgba(249,254,255,.6);">
			<div class="col-md-8 col-lg-offset-5">
			   <h2 style="font-weight:bolder;margin-bottom:3%;"><span class="ion-minus"></span>Novidades<span class="ion-minus"></span></h2>
			  </div>
				<div class="row">
					<div class="col-md-9 col-lg-offset-2 text-center">
						<p style="font-size:25px;">Conteúdo totalmente dedicado a você, papai! </p><br>
					 </div>
				</div>

			<div class="row">

					<div class="col-md-12 col-sm-6 col-xs-12" data-aos="fade-right">

				<?php 	while($dados = mysqli_fetch_assoc($resultado_postagem)){?>


						<div class="col-md-3 col-xs-12">
							<img src="imagens/<?php echo $dados['imagem'] ?>" alt="" width="100%">
						</div>

						<div class="col-md-3 col-xs-12">
							 <div class="blog-column">
								<label style="font-size:20px;"><?php echo $dados['titulo'];  ?></span>
								<label style="font-size:12px;"><?php echo substr($dados['resumo'],0,300); echo"..." ?></label>

								<a   style="color:rgba(69,90,194,.8); font-weight:bolder;" class="btn btn-blog pull-right marginBottom10" href="ver_mais_semlog.php?id=<?php echo $dados['id_postagem'];?>">Ver mais</a>
							</div>
						</div>

						<?php }?>

					</div>


			</div>
			</div>
	</div>
</div>

				<br/></br><br/><br/></br>






			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 1){ ?>
							<a href="conteudo.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="conteudo.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="conteudo.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>

					<?php }  ?>
					</li>
				</ul>
			</nav>





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
		margin-left:-36vw;

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
