<?php
//print_r();
// Conexão com o banco de dados
include ('conexao.php');



//Declarando as variaveis com os campos do formulario
	$titulo = $_POST["titulo"];
	$texto = $_POST["texto"];
	$resumo = $_POST["resumo"];
	$tamanho_texto = strlen($texto);
	$tamanho_titulo = strlen($titulo);
	session_start();
	$idusuario = $_SESSION["id_usuario_log"];
	$categoria = $_POST["categorias"];

// Se o usuário clicou no botão cadastrar efetua as ações
	$imagem = $_FILES["imagem"];
	//print_r($imagem);exit;
	//abaixo faço uma checagem para ver se o usuário não está enviando o campo file em branco, a chave "error" serve para sabermos os niveis de erros
	if ($imagem["error"]==1){?>
		<script>
			alert('O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini');//Ai teremos que alterar lá no php.ini meus camaradas, pesquisem e deem seus pulos
			location.href='index.php';
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
		$tamanho = 2000000; // coloquei 1 megabyte
    	// Verifica se o arquivo é uma imagem através de uma função nativa do PHP preg_match, através de expressões regulares
    	if(!preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext)){?>
            	<script>
					alert('Ops! Isso não é uma imagem.');
					location.href='index.php';
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

			if(isset($_SESSION["id_usuario"])){
				$idusuario =  $_SESSION["id_usuario"];
			}else{
					$idusuario =  $_SESSION["id_usuario_log"];
			}

			if(isset($_SESSION["tipo_usuario"])){
			 $idtipousuario =  $_SESSION["tipo_usuario"];
		 }else{
				 $idtipousuario =  $_SESSION["fk_tipo_usuario"];
		 }

			//$select = "SELECT id_postagem FROM postagem ORDER BY id_postagem DESC";
			//$query_select = mysqli_query($conexao,$select);
			//$exiba = mysqli_fetch_array($query_select);
			//$id_postagem = $exiba ["id_postagem"];
			//$query_imagem = "INSERT INTO imagem (nome,id_fk_postagem) VALUES ('$nome_imagem',$id_postagem)";



			// Insere os dados no banco de dados
			$query = "INSERT INTO postagem (titulo,conteudo,data_hora,id_fk_usuario,imagem,resumo,id_fk_categoria,id_fk_tipo_usuario) VALUES ('$titulo','$texto',NOW(),$idusuario,'$nome_imagem','$resumo',$categoria, $idtipousuario)";
			$postar = mysqli_query($conexao,$query);
			//print_r($query);exit;




			// Se os dados forem inseridos com sucesso, retorna essa mensagem
			if ($postar){?>
            	<script>
					alert('Postagem realizada com sucesso');
					location.href='../feeed.php';//e redireciono o usuario para a pagina inicial, se quiserem mandar pra listagem fiquem a vontade
				</script>
            <?php
			}else{?>
				<script>
					alert('Erro');
					location.href='../postar_adm.php';
				</script>
				<?php
			}
		}
	}
?>
