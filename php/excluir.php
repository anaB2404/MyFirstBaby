<?php

	include 'conexao.php';
	$id=$_GET["id"];
	$query="DELETE FROM postagem WHERE id_postagem = $id";
	$executa=mysqli_query($conexao,$query);

	if ($executa == 1)
	{
		echo "<script>
			alert('Postagem excluída com sucesso!');
		window.location='../feeed.php';</script>";
	}
	else
	{
		echo "<script>
			alert('A postagem não foi excluídos');
			history.back;</script>";
	}

?>
