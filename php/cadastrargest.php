<?php
include 'conexao.php';
include 'cadastrogest.php';

  //print_r($_SESSION);exit;
  if ($_SESSION['cadastrargest'] == 1) {
    $sexo = $_POST["sexo"];
    $query_insert = "INSERT INTO bebe(tipo_bebe,nome,sobrenome,sexo,id_fk_usuario,data_nascimento)
    VALUES (2,'$nomebb','$sobrenbb',$sexo,$idgestante,'$data')";
  // echo $query_insert;exit;
    $insere = mysqli_query($conexao,$query_insert);
    


      if ($insere == 1)
      {
        echo "<script>
                  alert('Dados inseridos com sucesso!');
                  window.location='foto_perfil2.php';
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
