<?php

include 'conexao.php';

	$nome = $_POST["nomes"];
	$tnomep = strlen($nome);
	$email = $_POST["emails"];
	$temail = strlen($email);
	$telefone = $_POST ["telefones"];
	$ttelefone = strlen($telefone);
	$celular = $_POST ["telefonesc"];
	$tcelular = strlen($celular);
	$mensagem = $_POST["mensagens"];
	$tmensagem = strlen($mensagem);
	$erro = 0;


	if ($tnomep > 0 && $tnomep <= 2){

		echo "<script>
									$('#input-nomep').blur(function(){

										document.getElementById('msg-nomep').innerHTML = 'Nome Inválido!';
										$('#input-nomep').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($tnomep)){
					echo "<script>
								$('#input-nomep').blur(function(){

										document.getElementById('msg-nomep').innerHTML =  '';
										$('#input-nomep').removeClass('invalidado');
										$('#input-nomep').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-nomep').blur(function(){

										document.getElementById('msg-nomep').innerHTML = ' ';
										$('#input-nomep').removeClass('invalidado');
										$('#input-nomep').addClass('validado');

								});
					</script>";


	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {



    if ($temail <= 30) {

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

	if ($ttelefone < 13){

		echo "<script>
									$('#input-telefone').blur(function(){

										document.getElementById('msg-telefone').innerHTML = 'Telefone Inválido!';
										$('#input-telefone').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($ttelefone)){
					echo "<script>
								$('#input-telefone').blur(function(){

										document.getElementById('msg-telefone').innerHTML =  '';
										$('#input-telefone').removeClass('invalidado');
										$('#input-telefone').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-telefone').blur(function(){

										document.getElementById('msg-telefone').innerHTML = ' ';
										$('#input-telefone').removeClass('invalidado');
										$('#input-telefone').addClass('validado');

								});
					</script>";


	}

	if ($tcelular < 14){

		echo "<script>
									$('#input-celular').blur(function(){

										document.getElementById('msg-celular').innerHTML = 'Celular Inválido!';
										$('#input-celular').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($tcelular)){
					echo "<script>
								$('#input-celular').blur(function(){

										document.getElementById('msg-celular').innerHTML =  '';
										$('#input-celular').removeClass('invalidado');
										$('#input-celular').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-celular').blur(function(){

										document.getElementById('msg-celular').innerHTML = ' ';
										$('#input-celular').removeClass('invalidado');
										$('#input-celular').addClass('validado');

								});
					</script>";


	}

	if ($tmensagem > 300){

		echo "<script>
									$('#input-mensagem').blur(function(){

										document.getElementById('msg-mensagem').innerHTML = 'Mensagem muito grande';
										$('#input-mensagem').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($tmensagem)){
					echo "<script>
								$('#input-mensagem').blur(function(){

										document.getElementById('msg-mensagem').innerHTML =  '';
										$('#input-mensagem').removeClass('invalidado');
										$('#input-mensagem').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-mensagem').blur(function(){

										document.getElementById('msg-mensagem').innerHTML = ' ';
										$('#input-mensagem').removeClass('invalidado');
										$('#input-mensagem').addClass('validado');

								});
					</script>";


	}

	//echo $erro;
	session_start();

	    if($erro == 0) {
	      $_SESSION['cadastrarp'] = 1;
	    }else{
	      $_SESSION['cadastrarp'] = 0;
	    }






?>
