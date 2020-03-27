<?php
include 'conexao.php';
include 'configuracoes_bebe.php';

  //print_r($_SESSION);exit;
  if ($_SESSION['updateconfgbb'] == 1) {
    $sexo = $_POST["sexo"];
    list($dia, $mes, $ano) = explode('/', $data);
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    $query="UPDATE bebe SET nome = '$nome', sobrenome = '$sobrenome', sexo = $sexo, data_nascimento = '$data' WHERE id_fk_usuario= $idusuario";
    $postar = mysqli_query($conexao,$query);
    //print($query);exit;

    if ($postar == 1) {

      echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='configurar_perfil.php';
            </script>";

    }
    else {
      echo "<script>
                alert('Dados nao atualizados com sucesso!');
              history.back();
            </script>";
    }

	}




 ?>
