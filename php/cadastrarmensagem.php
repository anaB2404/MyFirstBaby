<?php
include 'conexao.php';
include 'parceimen.php';

  //print_r($_SESSION);exit;
  if ($_SESSION['cadastrarp'] == 1) {
    $query_insert = "INSERT INTO mensagem (nome,email,telefone,celular,mensagem)
  	VALUES ('$nome','$email','$telefone','$celular','$mensagem')";
  	$insere = mysqli_query($conexao,$query_insert);
    //print_r($query_insert);exit;



  	if($insere == 1){
  		 echo "<script>
  					    alert('mensagem enviada com sucesso!');
  					      window.location='parceirosmen_sem_log.php';
                  </script>";

  	}else{

      echo "<script>
              alert('ocorreu um erro!');
              history.back();
            </script>";
  	}

	}




 ?>
