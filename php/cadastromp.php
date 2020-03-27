<?php
  include ('conexao.php');

  session_start();

  $nomebb = $_POST["nomebb"];
  $sobrenbb = $_POST["sobrenomebb"];
  $tnome = strlen($nomebb);
  $tsobrenbb = strlen($sobrenbb);
  $idtipousuario = $_SESSION["fk_tipo_usuario"];
  $idmaepai = $_SESSION["id_usuario"];
  $idbebe = $_SESSION["id_bebe"];
  $erro = 0;
  $data = $_POST["bebezin"];
	$tdata = strlen($data);


  if ($tnome > 0 && $tnome <= 2){

    echo "<script>
                  $('#input-nomemp').blur(function(){

                    document.getElementById('msg-nomemp').innerHTML = 'Nome Inválido!';
                    $('#input-nomemp').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tnome)){
          echo "<script>
                $('#input-nomemp').blur(function(){

                    document.getElementById('msg-nomemp').innerHTML =  '';
                    $('#input-nomemp').removeClass('invalidado');
                    $('#input-nomemp').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-nomemp').blur(function(){

                    document.getElementById('msg-nomemp').innerHTML = ' ';
                    $('#input-nomemp').removeClass('invalidado');
                    $('#input-nomemp').addClass('validado');

                });
          </script>";


  }

  if ($tsobrenbb > 0 && $tsobrenbb <= 2){

    echo "<script>
                  $('#input-sobrenomemp').blur(function(){

                    document.getElementById('msg-sobrenomemp').innerHTML = 'Sobrenome Inválido!';
                    $('#input-sobrenomemp').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tsobrenbb)){
          echo "<script>
                $('#input-sobrenomemp').blur(function(){

                    document.getElementById('msg-sobrenomemp').innerHTML =  '';
                    $('#input-sobrenomemp').removeClass('invalidado');
                    $('#input-sobrenomemp').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-sobrenomemp').blur(function(){

                    document.getElementById('msg-sobrenomemp').innerHTML = ' ';
                    $('#input-sobrenomemp').removeClass('invalidado');
                    $('#input-sobrenomemp').addClass('validado');

                });
          </script>";


  }

  if($tdata == 10){
  list($dia, $mes, $ano) = explode('/', $data);
  $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
  $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
  $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
  if($idade < 0 || $idade > 4){
  echo "<script>
                $('#input-datamp').blur(function(){

                  document.getElementById('msg-datamp').innerHTML = 'Ops!! Um bebê tem de 0 à 4 anos';
                  $('#input-datamp').addClass('invalidado');

                });
        </script>";
    $erro += 1;
  }else{
   echo "<script>
              $('#input-datamp').blur(function(){

                  document.getElementById('msg-datamp').innerHTML = ' ';
                  $('#input-datamp').removeClass('invalidado');
                  $('#input-datamp').addClass('validado');

              });
        </script>";

  }
  }
else if(empty($data)){
        echo "<script>
              $('#input-datamp').blur(function(){

                  document.getElementById('msg-datamp').innerHTML =  '';
                  $('#input-datamp').removeClass('invalidado');
                  $('#input-datamp').removeClass('validado');

              });
        </script>";

        $erro += 1;
}
else {
  echo "<script>
                $('#input-datamp').blur(function(){

                  document.getElementById('msg-datamp').innerHTML = ' ';
                  $('#input-datamp').addClass('invalidado');

                });
        </script>";
}
//echo $erro;


  if($erro == 0) {
    $_SESSION['cadastrarmp'] = 1;
  }else{
    $_SESSION['cadastrarmp'] = 0;
  }


/*  if ($tnome <= 2 || $tnome > 32)
  {

    echo "<script>
            alert('Nome inválido!');
					  history.back();
				 </script>";

  }

  else if ($tsobrenbb <= 3 || $tsobrenbb >= 32)
  {

    echo "<script>
            alert ('Sobrenome inválido!');
            history.back();
          </script>";

  }

  else if(isset($_POST["vai"])){
  	$data = $_POST["bebezin"];
  	list($dia, $mes, $ano) = explode('/', $data);
  	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
  	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
  	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
  	if($idade>4){
      echo "<script>
              alert('Ops!! Um beê tem de 0 à 4 anos');
              history.back();
            </script>";
  	}
  else {
      $sexo = $_POST["sexo"];
      $query_insert = "INSERT INTO bebe(tipo_bebe,nome,sobrenome,sexo,id_fk_usuario,data_nascimento)
      VALUES (1,'$nomebb','$sobrenbb',$sexo,$idmaepai,'$data')";
      //echo $query_insert;exit;
      $insere = mysqli_query($conexao,$query_insert);


        if ($insere == 1)
        {
          echo "<script>
					          alert('Dados inseridos com sucesso!');
					          window.location='../foto_perfil.php';
                </script>";
        }
        else {
            echo "<script>
        						alert('ocorreu um erro!');
        						history.back();
                  </script>";

      }



}
}*/
?>
