<?php

    include 'conexao.php';

    session_start();

    if(isset($_SESSION["id_usuario"])){
      $idusuario =  $_SESSION["id_usuario"];
    }else{
        $idusuario =  $_SESSION["id_usuario_log"];
    }


      $comentario = $_POST["comentario"];
      $id_post = $_POST["id_post"];


      $query = "INSERT INTO comentario(comentario,id_fk_usuario,id_fk_postagem,data_hora) VALUES('$comentario',$idusuario,$id_post,NOW())";
      $insere = mysqli_query($conexao,$query);
      //print_r($query );exit;

       if($insere == 1)
      {
        echo "<script>
          alert('Comentario feito com sucesso!');
          location.href='../feeed.php';
          </script>";
      }
      else
      {
          echo "<script>
          alert('ocorreu um erro!');
          history.back();</script>";
      }






 ?>
