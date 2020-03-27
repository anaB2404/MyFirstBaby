<?php 

include 'conexao.php';

	$nome = $_POST["nomes"];
	$email = $_POST["emails"];
	$telefone = $_POST ["telefones"]; 
	$celular = $_POST ["telefonesc"];
	$mensagem = $_POST["mensagens"];
	$query_insert = "INSERT INTO mensagem (nome,email,telefone,celular,mensagem) 
	VALUES ('$nome','$email','$telefone','$celular','$mensagem')";
	$insere = mysqli_query($conexao,$query_insert);



	if($insere == 1){
		 echo "<script>
					    alert('mensagem enviada com sucesso!');
					    history.back();
                </script>";
		
	}else{
		
		echo "<script>
        			alert('ocorreu um erro!');
        			history.back();
              </script>";
		
	}
	




?>
