<?php
	 include '../php/conexao.php';
	 $nome = $_POST["nome"];
	 $tam_nome = strlen($nome);
	 $sobrenome = $_POST["sobrenome"];
	 $tam_sobrenome = strlen($sobrenome);
	 
	 session_start();
	 $idusuario = $_SESSION["id_usuario_log"];

	
	if($tam_nome <= 3 || $tam_nome >= 15 || $tam_sobrenome <=3 || $tam_sobrenome >=15 )
	{
			echo"<script>
				alert ('Nome invalido.');
				history.back();
			</script>";
	}else if($nome = "" || $sobrenome = ""){
		echo"<script>
				alert ('Nome invalido.');
				history.back();
			</script>";
	}else{
	$query="UPDATE bebe SET nome = '$nome', sobrenome = '$sobrenome' where id_fk_usuario = $idusuario";
	$execulta=mysqli_query($conexao,$query);
	print_r($query);
	}
?>