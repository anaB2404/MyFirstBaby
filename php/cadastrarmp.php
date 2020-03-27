<?php
include 'conexao.php';
include 'cadastromp.php';
  //print_r($_SESSION);exit;
  if ($_SESSION['cadastrarmp'] == 1) {
    $sexo = $_POST["sexo"];
    $query_insert = "INSERT INTO bebe(tipo_bebe,nome,sobrenome,sexo,id_fk_usuario,data_nascimento)
    VALUES (1,'$nomebb','$sobrenbb',$sexo,$idmaepai,'$data')";
    //echo print_r($query_insert);exit;
    $insere = mysqli_query($conexao,$query_insert);


      if ($insere == 1)
      {
        echo "<script>
                  alert('Dados inseridos com sucesso!');
                  window.location='foto_perfil.php';
              </script>";

      }
      else {
          echo "<script>
                  alert('ocorreu um erro!');
                  history.back();
                </script>";

    }

	}




 ?>
