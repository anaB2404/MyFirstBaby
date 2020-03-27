<?php
  include 'conexao.php';
  $postagem = $_POST["texto"];
  /*$query_select = "SELECT * FROM usuario";
  $exiba = mysqli_fetch_array($query_select);
  $iduser = $exiba["Id_Usuario"];*/
  session_start();
	//print_r($_SESSION);exit;
	if(isset($_SESSION["id_usuario"])){
		$idusuario =  $_SESSION["id_usuario"];
	}else{
			$idusuario =  $_SESSION["id_usuario_log"];
	}
	$query_insert = "INSERT INTO postagem (conteudo,data_hora,id_fk_usuario) VALUES ('$postagem',NOW(),  $idusuario);";

	//echo print_r($query_insert);exit;
  $insere = mysqli_query($conexao,$query_insert);

  //echo print_r($insere);exit;

  if($insere == 1)
  {
   echo "<script>
     alert('postagem feita com sucesso!');
     window.location='../feeed.php';</script>";
  }
  else
  {
     echo "<script>
     alert('ocorreu um erro!');
     history.back();</script>";
  }








 ?>
