<?php
  include ('conexao.php');

  session_start();

  $nomebb = $_POST["nomebb"];
  $sobrenbb = $_POST["sobrenomebb"];
  $tnomebb = strlen($nomebb);
  $tsobrenbb = strlen($sobrenbb);
  $erro = 0;
  $data = $_POST["bebezin"];
	$tdata = strlen($data);
  $idtipousuario = $_SESSION["fk_tipo_usuario"];
  $idbebe = $_SESSION["id_bebe"];
  $idgestante = $_SESSION["id_usuario"];


  if ($tnomebb > 0 && $tnomebb <= 2){

    echo "<script>
                  $('#input-nomegest').blur(function(){

                    document.getElementById('msg-nomegest').innerHTML = 'Nome Inválido!';
                    $('#input-nomegest').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tnomebb)){
          echo "<script>
                $('#input-nomegest').blur(function(){

                    document.getElementById('msg-nomegest').innerHTML =  '';
                    $('#input-nomegest').removeClass('invalidado');
                    $('#input-nomegest').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-nomegest').blur(function(){

                    document.getElementById('msg-nomegest').innerHTML = ' ';
                    $('#input-nomegest').removeClass('invalidado');
                    $('#input-nomegest').addClass('validado');

                });
          </script>";


  }

  if ($tsobrenbb > 0 && $tsobrenbb <= 2){

    echo "<script>
                  $('#input-sobrenomegest').blur(function(){

                    document.getElementById('msg-sobrenomegest').innerHTML = 'Sobrenome Inválido!';
                    $('#input-sobrenomegest').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tsobrenbb)){
          echo "<script>
                $('#input-sobrenomegest').blur(function(){

                    document.getElementById('msg-sobrenomegest').innerHTML =  '';
                    $('#input-sobrenomegest').removeClass('invalidado');
                    $('#input-sobrenomegest').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-sobrenomegest').blur(function(){

                    document.getElementById('msg-sobrenomegest').innerHTML = ' ';
                    $('#input-sobrenomegest').removeClass('invalidado');
                    $('#input-sobrenomegest').addClass('validado');

                });
          </script>";


  }

  if($tdata == 10){
  list($dia, $mes, $ano) = explode('/', $data);
  $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
  $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
  $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
  if($idade > 4){
  echo "<script>
                $('#input-datagest').blur(function(){

                  document.getElementById('msg-datagest').innerHTML = 'Ops!! Você não é mais gestante';
                  $('#input-datagest').addClass('invalidado');

                });
        </script>";
    $erro += 1;
  }else{
   echo "<script>
              $('#input-datagest').blur(function(){

                  document.getElementById('msg-datagest').innerHTML = ' ';
                  $('#input-datagest').removeClass('invalidado');
                  $('#input-datagest').addClass('validado');

              });
        </script>";

  }
  }
else if(empty($data)){
        echo "<script>
              $('#input-datagest').blur(function(){

                  document.getElementById('msg-datagest').innerHTML =  '';
                  $('#input-datagest').removeClass('invalidado');
                  $('#input-datagest').removeClass('validado');

              });
        </script>";

        $erro += 1;
}
else {
  echo "<script>
                $('#input-datagest').blur(function(){

                  document.getElementById('msg-datagest').innerHTML = ' ';
                  $('#input-datagest').addClass('invalidado');

                });
        </script>";
}
//echo $erro;


  if($erro == 0) {
    $_SESSION['cadastrargest'] = 1;
  }else{
    $_SESSION['cadastrargest'] = 0;
  }









  /*if ($tnome <= 2 || $tnome > 32)
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


  else if ($semanas == "") {
    echo"<script>
            alert('Digite quantas semanas');
					  history.back();
				 </script>";

  }

  else if ($datanasc == "")
  {

    echo "<script>
            alert('Data de nascimento nao adicionada!');
            history.back();
          </script>";

  }e {
  	# code...
  }

  else {
      $sexo = $_POST["sexo"];
      $query_insert = "INSERT INTO bebe(tipo_bebe,nome,sobrenome,semanas,sexo,id_fk_usuario,data_nascimento)
      VALUES (2,'$nomebb','$sobrenbb',$semanas,$sexo,$idgestante,'$datanasc')";
     //echo $query_insert;exit;
      $insere = mysqli_query($conexao,$query_insert);


        if ($insere == 1)
        {
          echo "<script>
					          alert('Dados inseridos com sucesso!');
					          window.location='../foto_perfil2.php';
                </script>";
        }
        else {
            echo "<script>
        						alert('ocorreu um erro!');
        						history.back();
                  </script>";

      }



}*/
 ?>
