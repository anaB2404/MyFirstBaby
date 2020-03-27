<?php

    include 'conexao.php';
    $idcomentario = $_GET["id"];
    $query="DELETE FROM comentario WHERE id_comentario = $idcomentario";
    $executa = mysqli_query($conexao,$query);

    if ($executa == 1)
    {
      echo "<script>
        alert('Comentario excluido com sucesso!');
        history.back();</script>";
    }
    else
    {
      echo "<script>
        alert('Os dados não foram excluídos');
        history.back;</script>";
    }









 ?>
