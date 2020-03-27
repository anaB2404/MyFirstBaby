<?php

	include 'conexao.php';
	$id=$_GET["id"];
	$query="DELETE FROM usuario WHERE id_usuario = $id";
  $query_delete = "DELETE FROM postagem WHERE id_fk_usuario = $id";
  $query_delete = "DELETE FROM comentario WHERE id_fk_usuario = $id";
  $query_deletee = "DELETE FROM bebe WHERE id_fk_usuario = $id";
  $execulta = mysqli_query($conexao,$query_delete);
  $execullta = mysqli_query($conexao,$query_deletee);
	$executa=mysqli_query($conexao,$query);

	if ($executa == 1)
	{
    echo "<script>
              confirm('Você tem certeza que deseja excluir sua conta?');
              window.location='../index.php';
          </script>";
	}
	else
	{
		echo "<script>
			alert('Usuario não excluído');
			history.back;</script>";
	}

?>
