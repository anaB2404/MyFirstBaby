<?php
//print_r();
// Conexão com o banco de dados
include ('conexao.php');



//Declarando as variaveis com os campos do formulario
	session_start();

	// sessao ids


//	print_r($_SESSION);exit;

			if(isset($_SESSION["id_usuario"])){
				$idusuario =  $_SESSION["id_usuario"];
			}else{
				$idusuario =  $_SESSION["id_usuario_log"];
			}



	// IMAGEM USUARIO

// Se o usuário clicou no botão cadastrar efetua as ações
	$imagem = $_FILES["imagem"];
	//print_r($imagem);exit;
	//abaixo faço uma checagem para ver se o usuário não está enviando o campo file em branco, a chave "error" serve para sabermos os niveis de erros
	if ($imagem["error"]==4){?>
		<script>
			alert('Não envie em branco');
			history.back();
		</script>
	<?php }if ($imagem["error"]==1){?>
		<script>
			alert('O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini');//Ai teremos que alterar lá no php.ini meus camaradas, pesquisem e deem seus pulos
		history.back();
		</script>
	<?php }
	//print_r($imagem);exit;
	// Se a imagem estiver sido selecionada
	if ($imagem["name"]) {
		// Largura máxima em pixels
		$largura = 2000;
		// Altura máxima em pixels
		$altura = 3000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000; // coloquei 1 megabyte
    	// Verifica se o arquivo é uma imagem através de uma função nativa do PHP preg_match, através de expressões regulares
    	if(!preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext)){?>
            	<script>
 					alert('Ops! Isso não é uma imagem.');
					history.back();
				</script>
            <?php
			}

		// Pega as dimensões da imagem, criando um novo vetor através da função nativa getimagesize
		$dimensoes = getimagesize($imagem["tmp_name"]);
		//print_r($dimensoes);exit;
		//echo $dimensoes[0];exit;
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			echo "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			echo "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	echo "A imagem deve ter no máximo ".$tamanho." bytes";
		}else {

			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

        	// Gera um nome único para a imagem, esse nome será criptografado em md5 (assim como poderia ser em sha1, preferi md5 porque não requer tanta segurança e o número de caracteres é menor que sha1), juntamente com o milesegundos que estou upando a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho = "../imagens/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho);

			$query="UPDATE usuario SET foto_perfil = '$nome_imagem' WHERE id_usuario= $idusuario";
			//print_r($query);exit;
			$postar = mysqli_query($conexao,$query);

			if ($postar == 0){?>
				<script>
					alert('Erro na foto do usuario');
					location.href='../foto_perfil.php';
				</script>
            <?php


			}

		}
	}

	// IMAGEM BEBE

	// Se o usuário clicou no botão cadastrar efetua as ações
	$imagembb = $_FILES["imagembb"];
	//print_r($imagem);exit;
	//abaixo faço uma checagem para ver se o usuário não está enviando o campo file em branco, a chave "error" serve para sabermos os niveis de erros
	if ($imagembb["error"]==4){?>
		<script>
			alert('Não envie em branco');
			history.back();
		</script>
	<?php }if ($imagembb["error"]==1){?>
		<script>
			alert('O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini');//Ai teremos que alterar lá no php.ini meus camaradas, pesquisem e deem seus pulos
		history.back();
		</script>
	<?php }
	//print_r($imagembb);exit;
	// Se a imagem estiver sido selecionada
	if ($imagembb["name"]) {
		// Largura máxima em pixels
		$largura = 2000;
		// Altura máxima em pixels
		$altura = 3000;
		// Tamanho máximo do arquivo em bytes
		$tamanho= 1000000; // coloquei 1 megabyte
    	// Verifica se o arquivo é uma imagem através de uma função nativa do PHP preg_match, através de expressões regulares
    	if(!preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagembb["name"], $ext)){?>
            	<script>
					alert('Ops! Isso não é uma imagem.');
				history.back();
				</script>
            <?php
   	 	}

		// Pega as dimensões da imagem, criando um novo vetor através da função nativa getimagesize
		$dimensoes = getimagesize($imagembb["tmp_name"]);
		//print_r($dimensoes);exit;
		//echo $dimensoes[0];exit;
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			echo "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			echo "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}

		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagembb["size"] > $tamanho) {
   		 	echo "A imagem deve ter no máximo ".$tamanho." bytes";
		}else {

			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagembb["name"], $ext);

        	// Gera um nome único para a imagem, esse nome será criptografado em md5 (assim como poderia ser em sha1, preferi md5 porque não requer tanta segurança e o número de caracteres é menor que sha1), juntamente com o milesegundos que estou upando a imagem
        	$nome_imagembb = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho = "../imagens/" . $nome_imagembb;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagembb["tmp_name"], $caminho);

			// insere bebe

		//	print_r($nome_imagembb);
		$query_selectbb = "SELECT id_bebe FROM bebe ORDER BY id_bebe DESC";
		$select = mysqli_query($conexao,$query_selectbb);
		$exibicao = mysqli_fetch_array($select);
		$idbebe = $exibicao["id_bebe"];

			$query_bebe="UPDATE bebe SET foto_bebe = '$nome_imagembb' WHERE id_bebe = $idbebe";
			$postarbb = mysqli_query($conexao,$query_bebe);
		//	print_r($query_bebe);exit;

			if ($postarbb == 0){?>
				<script>
					alert('Erro na foto do bebe');
					location.href='../foto_perfil.php';
				</script>
						<?php


			}
?>

				<?php
			}
		}




			// Insere os dados no banco de dados



			if($postar == 1 && $postarbb == 1){?>
				<script>
					alert('Foto inserida');
					location.href='../feeed.php';
				</script>
						<?php


			}


			// Se os dados forem inseridos com sucesso, retorna essa mensagem

?>
