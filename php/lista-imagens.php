<h1>Imagens cadastradas</h1>
<?php
include 'conexao.php';

// Seleciona todos os campos
$query = "SELECT * FROM imagem";
$listar = mysqli_query($conexao,$query);
// Exibe as informações de cada usuário
while ($dados = mysqli_fetch_array($listar)) {
	// Exibimos a imagem
	//print_r($dados);
	?>
    <img width="25%" src="../imagens/<?php echo $dados["nome"]?>"/>
	<form action="exclui.php" method="post">
    	<input type="hidden" name="imagem" value="<?php echo $dados["nome"]?>"/>
        <input type="submit" value="Excluir imagem"/>
    </form>
<?php
}
?>
</body>
</html>