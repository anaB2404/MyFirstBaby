<?php


  include ('conexao.php');

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $senha = $_POST["senha"];
  $confirmsenha = $_POST["confirmsenha"];
  $email = $_POST["email"];
  $tnome = strlen($nome);
  $tsobren = strlen($sobrenome);
  $temail = strlen($email);
  $tsenha = strlen($senha);
  $erro = 0;
  $data = $_POST["data"];
	$tdata = strlen($data);


  // VALIDAÇÃO TAMANHO NOME

  if ($tnome > 32 && $tnome <= 2){

    echo "<script>
                  $('#input-nome').blur(function(){

                    document.getElementById('msg-nome').innerHTML = 'Nome Inválido!';
                    $('#input-nome').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tnome)){
          echo "<script>
                $('#input-nome').blur(function(){

                    document.getElementById('msg-nome').innerHTML =  '';
                    $('#input-nome').removeClass('invalidado');
                    $('#input-nome').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-nome').blur(function(){

                    document.getElementById('msg-nome').innerHTML = ' ';
                    $('#input-nome').removeClass('invalidado');
                    $('#input-nome').addClass('validado');

                });
          </script>";


  }

  // VALIDAÇÃO TAMANHO SOBRENOME

  if ($tsobren > 0 && $tsobren <= 2){

    echo "<script>
                  $('#input-sobrenome').blur(function(){

                    document.getElementById('msg-sobrenome').innerHTML = 'Sobrenome Inválido!';
                    $('#input-sobrenome').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tsobren)){
          echo "<script>
                $('#input-sobrenome').blur(function(){

                    document.getElementById('msg-sobrenome').innerHTML =  '';
                    $('#input-sobrenome').removeClass('invalidado');
                    $('#input-sobrenome').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-sobrenome').blur(function(){

                    document.getElementById('msg-sobrenome').innerHTML = ' ';
                    $('#input-sobrenome').removeClass('invalidado');
                    $('#input-sobrenome').addClass('validado');

                });
          </script>";


  }

  // VALIDAÇÃO TAMANHO EMAIL

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $verifemail = "SELECT * FROM usuario WHERE email = '$email'";
    $verfquery = mysqli_query($conexao,$verifemail);

    if (mysqli_fetch_array($verfquery) == null) {

      echo "<script>
                  $('#input-email').blur(function(){

                      document.getElementById('msg-email').innerHTML = ' ';
                      $('#input-email').removeClass('invalidado');
                      $('#input-email').addClass('validado');

                  });
            </script>";

    }else {

          echo "<script>
                        $('#input-email').blur(function(){

                          document.getElementById('msg-email').innerHTML = 'Email Inválido!';
                          $('#input-email').addClass('invalidado');

                        });
                </script>";

                $erro += 1;
    }

  }else if (empty($email)) {
    echo "<script>
          $('#input-email').blur(function(){

              document.getElementById('msg-email').innerHTML =  '';
              $('#input-email').removeClass('invalidado');
              $('#input-email').removeClass('validado');

          });
    </script>";

    $erro += 1;
  }else {
    echo "<script>
                $('#input-email').blur(function(){

                    document.getElementById('msg-email').innerHTML = ' ';
                    $('#input-email').removeClass('invalidado');
                    $('#input-email').addClass('validado');

                });
          </script>";
            $erro += 1;
  }

  //VALIDAÇÃO SENHA

  if ($tsenha > 0 && $tsenha < 8){

    echo "<script>
                  $('#input-senha').blur(function(){

                    document.getElementById('msg-senha').innerHTML = 'Senha deve ter mais de 8 caracteres!';
                    $('#input-senha').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($tsenha)){
          echo "<script>
                $('#input-senha').blur(function(){

                    document.getElementById('msg-senha').innerHTML =  '';
                    $('#input-senha').removeClass('invalidado');
                    $('#input-senha').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-senha').blur(function(){

                    document.getElementById('msg-senha').innerHTML = ' ';
                    $('#input-senha').removeClass('invalidado');
                    $('#input-senha').addClass('validado');

                });
          </script>";


  }

  if ($senha != $confirmsenha){

    echo "<script>
                  $('#input-csenha').blur(function(){

                    document.getElementById('msg-csenha').innerHTML = 'As senhas não conferem';
                    $('#input-csenha').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($confirmsenha)){
          echo "<script>
                $('#input-csenha').blur(function(){

                    document.getElementById('msg-csenha').innerHTML =  '';
                    $('#input-csenha').removeClass('invalidado');
                    $('#input-csenha').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-csenha').blur(function(){

                    document.getElementById('msg-csenha').innerHTML = ' ';
                    $('#input-csenha').removeClass('invalidado');
                    $('#input-csenha').addClass('validado');

                });
          </script>";


  }

  //VALIDAÇÃO DATA



  	if($tdata == 10){
		list($dia, $mes, $ano) = explode('/', $data);
		$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
		$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
		$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
		if($idade < 12 || $idade > 80){


            echo "<script>
                          $('#input-data').blur(function(){

                            document.getElementById('msg-data').innerHTML = 'Voce não tem idade para se cadastrar';
                            $('#input-data').addClass('invalidado');

                          });
                  </script>";
        		  $erro += 1;


		}else{

      echo "<script>
                 $('#input-data').blur(function(){

                     document.getElementById('msg-data').innerHTML = ' ';
                     $('#input-data').removeClass('invalidado');
                     $('#input-data').addClass('validado');

                 });
           </script>";
		}
  	}
	else if(empty($data)){
          echo "<script>
                $('#input-data').blur(function(){

                    document.getElementById('msg-data').innerHTML =  '';
                    $('#input-data').removeClass('invalidado');
                    $('#input-data').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }
  else {
	  echo "<script>
                  $('#input-data').blur(function(){

                    document.getElementById('msg-data').innerHTML = ' ';
                    $('#input-data').addClass('invalidado');

                  });
          </script>";
  }
//echo $erro;
session_start();

    if($erro == 0) {
      $_SESSION['cadastrar'] = 1;
    }else{
      $_SESSION['cadastrar'] = 0;
    }



?>
