<?php
  include 'conexao.php';
  $email = $_POST["logemail"];  // regatando email
  $senha =$_POST["password"];  ///resgatando senha
  $query = "SELECT email,senha,id_usuario,fk_id_tipo_usuario FROM usuario where email='$email' and senha='$senha'"; // puxando o email no banco
  $executa = mysqli_query($conexao,$query); // executando a query que puxa o email no banco
  $exibir = mysqli_fetch_array($executa);
  $linha = mysqli_num_rows($executa);
  if($linha==0){
    echo "<script>
            alert('email ou senha invalido');
            history.back();
        </script>";
  }else{
    session_start();
    $_SESSION["tipo_usuario"] = $exibir['fk_id_tipo_usuario'];  // sessaõ do id do tipo de usuario ,se é adm ou usuario comum
    $_SESSION["id_usuario_log"] = $exibir['id_usuario'];
    if ($_SESSION["tipo_usuario"] == 1) {  //falando que se o id_tipo_usuario for igual a 1 ele é adm e pode fazer o que quizer
      echo "<script>window.location='../feeed.php';</script>";
    }
    else  // se nao ele nao tem acesso a tudo que quiser
    {
      echo "<script>window.location='../feeed.php';</script>";
    }
  }
 ?>
