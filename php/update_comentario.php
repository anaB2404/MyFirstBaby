<?php
//	print_r($_GET); exit;
	include 'conexao.php';
	$idcomentario = $_GET['id'];
  $comentario = $_GET['comentario'];

	$query="UPDATE comentario SET comentario = '$comentario' WHERE id_comentario= $idcomentario";
	$execulta=mysqli_query($conexao,$query);

  //echo $execulta;

	if($execulta == 1){
		echo "<script>
			alert('comentario atualizado com sucesso!');
		window.location='../feeed.php';</script>";
	}else{
		echo "<script>
			alert('comentario não atualizado com sucesso');
		  history.bacl();</script>";
	}
?>
