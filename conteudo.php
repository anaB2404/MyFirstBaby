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
$result_postagens = "SELECT a.id_postagem,a.titulo,a.conteudo,a.resumo,a.imagem,a.data_hora,b.id_usuario,b.nome as nome,b.foto_perfil as foto_perfil FROM postagem AS a INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario WHERE id_fk_categoria = 1 ORDER BY a.id_postagem DESC limit $incio, $quantidade_pg";
$resultado_postagem = mysqli_query($conexao, $result_postagens);
$total_postagem = mysqli_num_rows($resultado_postagem);

$categoria = 1;
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
		<title>Nutrição</title>

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
             <br/></br></br>
		<?php include 'navbarr.php';
		include 'slide_nutricao.html';
		//$dados = mysqli_fetch_assoc($resultado_postagem);
		?>

		<div class="postagens">
			<p><?php while($dados = mysqli_fetch_assoc($resultado_postagem)){ ?>
				 <div class="col-md-10 blogShort"/>
                     <font size="15px"> <?php echo $dados['titulo'] ?></font>
                     <img src="imagens/<?php echo $dados['imagem']; ?>" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail"  width="460px"/>



                         <?php echo substr($dados['resumo'],0,300); echo"..." ?> 
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="ver_mais.php?id=<?php echo $dados['id_postagem'];?>">Ver mais</a>
					 <?php //print_r($dados);exit; ?>
                 </div>

			<?php }?></p>
		</div>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>
			<br/><br/></br><br/><br/></br><br/><br/></br>






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



		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<?php include 'rodape.php' ?>
	</body>
</html>

<style>
	.pull-left img-responsive thumb margin10 img-thumbnail{
		width: 10%;
	}
	.col-md-10 blogShort{
			margin-left: 10px;

	}
	.postagens{
		margin-left: 18%;
	}
</style>
