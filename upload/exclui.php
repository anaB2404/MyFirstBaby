<?php	
	include 'conexao.php';
	$imagem=$_POST['imagem'];
	$query="DELETE FROM imagem WHERE nome = '$imagem'";// com essa query excluiremos o nome do arquivo em nosso banco de dados
	unlink("../imagens/".$imagem);//não basta apenas excluirmos o arquivo no banco de dados, precisamos também excluir o arquivo físico na pasta
	$exclui = mysqli_query($conexao,$query);
	if($exclui){?>
		<script>
            alert('O arquivo foi excluido');
            location.href='index.php';
        </script>
	<?php
	}else{?>
    	<script>
            alert('Ferrou !!!');
            location.href='index.php';
        </script>
	<?php		
	}
?>