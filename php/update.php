<?php
//	print_r($_GET); exit;
	include 'conexao.php';
	$idpostagem=$_GET['id'];
  $conteudo = $_GET['conteudo'];


	$query="UPDATE postagem SET conteudo = '$conteudo' WHERE id_postagem= $idpostagem";
	$execulta=mysqli_query($conexao,$query);

  //echo $execulta;

	if($execulta == 1){
		echo "<script>
			alert('Postagem atualizada com sucesso!');
		window.location='../feeed.php';</script>";
	}else{
		echo "<script>
			alert('Postagem não atualizada com sucesso');
		  history.bacl();</script>";
	}
?>
