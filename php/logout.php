<?php
// inicializa a sessao
session_start();
// limpa a sessao
$_SESSION = array(); // colocando a session com um array vazio faz com ela
					 // fique vazia sem nenhuma variavel nela, liberando o espaço

// destroy a sessaoo
session_destroy();

// redireciona o link para a home page a pagina "index.php"
echo "<script>alert('Você saiu!'); document.location.href='../index.php';</script>";
?>
