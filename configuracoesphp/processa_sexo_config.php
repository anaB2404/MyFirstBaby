<?php
	 include '../php/conexao.php';
	 $sexo = $_POST["sexo"];
	 session_start();
	 $idusuario = $_SESSION["id_usuario_log"];
	
	 $query="UPDATE usuario SET sexo = '$sexo' where id_usuario = $idusuario";
	 $execulta=mysqli_query($conexao,$query);
	 echo"<script>
				alert ('Sexo alterado com sucesso');
				location.href='../configuracoes.php';
			</script>";
	 //print_r($query);
?>