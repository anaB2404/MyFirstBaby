
	<?php include("php/conexao.php");
	
	  $nome = $_POST["name"];
	  $email = $_POST["email"];
	  $confirmsenha = $_POST["comments"];
	
		// Cria uma variável que terá os dados do erro
		$erro = false;

		// Verifica se o POST tem algum valor
		if ( !isset( $_POST ) || empty( $_POST ) ) {
			$erro = 'Nada foi postado.';
		}
		
		
		// Cria as variáveis dinamicamente
		foreach ( $_POST as $chave => $valor ) {
			// Remove todas as tags HTML
			// Remove os espaços em branco do valor
			$$chave = trim( strip_tags( $valor ) );
			
			// Verifica se tem algum valor nulo
			if ( empty ( $valor ) ) {
				$erro = 'Existem campos em branco.';
			}
		}

		// Verifica se $email realmente existe e se é um email. 
		// Também verifica se não existe nenhum erro anterior
		if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
			$erro = 'Envie um email válido.';
		}

		// Se existir algum erro, mostra o erro
		if ( $erro ) {
			echo $erro;
		} else {
			$query_insert = "INSERT INTO msg_sobre (nome, email, msg)
			VALUES ('$nome','$email','$comments')";
			$insere = mysqli_query($conexao,$query_insert);
			echo"<script>
            alert ('Dados inseridos com sucesso!');
					  history.back();
					  

				</script>";
				
		}
		
		
	?>