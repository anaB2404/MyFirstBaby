<?php
include 'conexao.php';
include 'cadastro.php';


  //print_r($_SESSION);exit;
  if ($_SESSION['cadastrar'] == 1) {
      $sexo = $_POST["sexo"];
      $idtipouser = $_POST["tipousuario"];
      $query_insert = "INSERT INTO usuario (nome, sobrenome, sexo,data_nascimento, fk_id_tipo_usuario, senha, email)
      VALUES ('$nome','$sobrenome',$sexo,'$data',$idtipouser,'$senha','$email')";
      $insere = mysqli_query($conexao,$query_insert);
      $selecao = "SELECT id_usuario FROM usuario ORDER BY id_usuario DESC";
      $selecione =  mysqli_query($conexao,$selecao);
      $exibindo = mysqli_fetch_array($selecione);
      $iduser = $exibindo["id_usuario"];
      $idtipousuario = ['fk_id_tipo_usuario'];
      $query_selectbb = "SELECT id_bebe FROM bebe ORDER BY id_bebe DESC";
      $select = mysqli_query($conexao,$query_selectbb);
      $exibicao = mysqli_fetch_array($select);
      $idbebe = $exibicao["id_bebe"];
      session_start();
      $_SESSION["id_usuario"]=$iduser;
      $_SESSION["fk_tipo_usuario"]=$idtipousuario;
      $_SESSION["id_bebe"]=$idbebe;

    //  print_r($query_insert);exit;

        if ($idtipouser == 2) {
           ?>
          <script language="javascript" type="text/javascript">
            decisao = confirm("Você tem certeza que é Mamãe/Papai?");
            if (decisao == true){
               window.location='cadastromaepai.php';
             } else {
               alert ("Você cancelou o cadastro");
               window.location='cadastro.php';
             }
             </script><?php
        }
        else if ($idtipouser == 3) {
          ?>
         <script language="javascript" type="text/javascript">
           decisao = confirm("Você tem certeza que é Gestante?");
           if (decisao == true){
              window.location='cadastrogestante.php';
            } else {
              alert ("Você cancelou o cadastro");
              window.location='cadastro.php';
            }
            </script><?php
           }
        else if ($idtipouser == 4) {
          ?>
         <script language="javascript" type="text/javascript">
           decisao = confirm("Você tem certeza que é Visitante?");
           if (decisao == true){
              window.location='foto_perfil2.php';
            } else {
              alert ("Você cancelou o cadastro");
              window.location='cadastro.php';
            }
            </script><?php
          }
        else {
          "<script>
                    alert('Marque o tipo de usuario');
                    history.back();
                </script>";
        }

	}




 ?>
