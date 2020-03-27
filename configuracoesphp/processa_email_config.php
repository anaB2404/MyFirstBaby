<?php
	 include '../php/conexao.php';
	 $emailatual = $_POST["emailatual"];
	 $email = $_POST["email"];
	 $emailconfirme = $_POST["confirmeemail"]
	 session_start();
	 $idusuario = $_SESSION["id_usuario_log"];
	
	 if($email == emailconfirme)
	 {
	 $query="UPDATE usuario SET email = '$email' where id_usuario = $idusuario";
	 $execulta=mysqli_query($conexao,$query);
	 echo"<script>
				alert ('Sexo alterado com sucesso');
				location.href='../configuracoes.php';
			</script>";
	 }else{
	  echo"<script>
				alert ('Os emails não conferem');
				history.back();
			</script>";
	 }
	 //print_r($query);
?>