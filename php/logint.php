<?php

  session_start();

  include 'conexao.php';
  $email = $_POST["logemail"];  // regatando email
  $senha = $_POST["password"];  ///resgatando senha
  $query = "SELECT * FROM usuario where email='$email'"; // puxando o email no banco
  $executa = mysqli_query($conexao,$query); // executando a query que puxa o email no banco
  $exibir = mysqli_fetch_array($executa); // armazenando o resultado da query no array
  $_SESSION["tipo_usuario"] = $exibir['fk_Id_tipo_usuario'];  // sessaõ do id do tipo de usuario ,se é adm ou usuario comum



//  echo $exibir['email'];
  if($email != $exibir["email"] || $senha != $exibir["Senha"]) // falando se email e senha forem diferentes dos que estao no banco ele nao entra
  {
    echo "<script>
            alert('email ou senha invalido');
            history.back();
        </script>";
  }
  else if ($exibir['fk_Id_tipo_usuario'] == 1) {  //falando que se o id_tipo_usuario for igual a 1 ele é adm e pode fazer o que quizer
    echo "<script>window.location='../feeed.php';</script>";
  }
  else  // se nao ele nao tem acesso a tudo que quiser
  {
    echo "<script>window.location='../feeed.php';</script>";
  }




 ?>
