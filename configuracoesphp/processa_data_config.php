<?php
	 include '../php/conexao.php';
	 $data = $_POST["nasc"];
	 session_start();
	 $idusuario = $_SESSION["id_usuario_log"];
	
	 $query="UPDATE usuario SET data_nascimento = '$data' where id_usuario = $idusuario";
	 $execulta=mysqli_query($conexao,$query);
	 echo"<script>
				alert ('Data alterado com sucesso');
				location.href='../configuracoes.php';
			</script>";
	 //print_r($query);
?>