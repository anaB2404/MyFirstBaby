<?php
	include "conexao.php";
	session_start();
	 if(isset($_SESSION["id_usuario"])){
      $idusuario =  $_SESSION["id_usuario"];
    }else{
        $idusuario =  $_SESSION["id_usuario_log"];
    }

	$nome = $_POST["nome"];
	$tamanho_nome = strlen($nome);

	$sobrenome = $_POST["sobrenome"];
	$tamanho_sobrenome = strlen($sobrenome);



	$data= $_POST["nasc"];
	$tamanho_data = strlen($data);

	$emailatual = $_POST["email_atual"];
	$tamanho_email_atual = strlen($emailatual);
	$novoemail = $_POST["email"];
	$tamanho_novo_email = strlen($novoemail);

	$senhaatual = $_POST["senha_atual"];
	$tamanho_senha_atual = strlen($senhaatual);

	$novasenha = $_POST["nova_senha"];
	$tamanho_nova_senha = strlen($novasenha);

	$confirmesenha = $_POST["repita_senha"];
	$tamanho_confirme_senha = strlen($confirmesenha);

	$erro = 0;


	// VALIDAÇÃO TAMANHO NOME
	if ($tamanho_nome > 32 && $tamanho_nome <= 2){

    echo "<script>
                  $('#input-nomeu').blur(function(){

                    document.getElementById('msg-nomeu').innerHTML = 'Nome Inválido!';
                    $('#input-nomeu').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($nome)){
          echo "<script>
                $('#input-nomeu').blur(function(){

                    document.getElementById('msg-nomeu').innerHTML =  '';
                    $('#input-nomeu').removeClass('invalidado');
                    $('#input-nomeu').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-nomeu').blur(function(){

                    document.getElementById('msg-nomeu').innerHTML = ' ';
                    $('#input-nomeu').removeClass('invalidado');
                    $('#input-nomeu').addClass('validado');

                });
          </script>";


  }

	if ($tamanho_sobrenome > 0 && $tamanho_sobrenome <= 2){

    echo "<script>
                  $('#input-sobrenomeu').blur(function(){

                    document.getElementById('msg-sobrenomeu').innerHTML = 'Sobrenome Inválido!';
                    $('#input-sobrenomeu').addClass('invalidado');

                  });
          </script>";

          $erro += 1;

  }else if(empty($sobrenome)){
          echo "<script>
                $('#input-sobrenomeu').blur(function(){

                    document.getElementById('msg-sobrenomeu').innerHTML =  '';
                    $('#input-sobrenomeu').removeClass('invalidado');
                    $('#input-sobrenomeu').removeClass('validado');

                });
          </script>";

          $erro += 1;
  }else{
    echo "<script>
                $('#input-sobrenomeu').blur(function(){

                    document.getElementById('msg-sobrenomeu').innerHTML = ' ';
                    $('#input-sobrenomeu').removeClass('invalidado');
                    $('#input-sobrenomeu').addClass('validado');

                });
          </script>";


  }
	if ($tamanho_nova_senha > 0 && $tamanho_nova_senha < 8){

		echo "<script>
									$('#input-senhau').blur(function(){

										document.getElementById('msg-senhau').innerHTML = 'Senha deve ter mais de 8 caracteres!';
										$('#input-senhau').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($novasenha)){
					echo "<script>
								$('#input-senhau').blur(function(){

										document.getElementById('msg-senhau').innerHTML =  '';
										$('#input-senhau').removeClass('invalidado');
										$('#input-senhau').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-senhau').blur(function(){

										document.getElementById('msg-senhau').innerHTML = ' ';
										$('#input-senhau').removeClass('invalidado');
										$('#input-senhau').addClass('validado');

								});
					</script>";


	}

	if ($novasenha != $confirmesenha){

		echo "<script>
									$('#input-csenhau').blur(function(){

										document.getElementById('msg-csenhau').innerHTML = 'As senhas não conferem';
										$('#input-csenhau').addClass('invalidado');

									});
					</script>";

					$erro += 1;

	}else if(empty($confirmesenha)){
					echo "<script>
								$('#input-csenhau').blur(function(){

										document.getElementById('msg-csenhau').innerHTML =  '';
										$('#input-csenhau').removeClass('invalidado');
										$('#input-csenhau').removeClass('validado');

								});
					</script>";

					$erro += 1;
	}else{
		echo "<script>
								$('#input-csenhau').blur(function(){

										document.getElementById('msg-csenhau').innerHTML = ' ';
										$('#input-csenhau').removeClass('invalidado');
										$('#input-csenhau').addClass('validado');

								});
					</script>";


	}

	if($tamanho_data == 10){
	list($dia, $mes, $ano) = explode('/', $data);
	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
	if($idade < 12 || $idade > 80){


					echo "<script>
												$('#input-dataupdate').blur(function(){

													document.getElementById('msg-dataupdate').innerHTML = 'Voce não tem idade para se cadastrar';
													$('#input-dataupdate').addClass('invalidado');

												});
								</script>";
						$erro += 1;


	}else{

		echo "<script>
							 $('#input-dataupdate').blur(function(){

									 document.getElementById('msg-dataupdate').innerHTML = ' ';
									 $('#input-dataupdate').removeClass('invalidado');
									 $('#input-dataupdate').addClass('validado');

							 });
				 </script>";
	}
	}
else if(empty($data)){
				echo "<script>
							$('#input-dataupdate').blur(function(){

									document.getElementById('msg-dataupdate').innerHTML =  '';
									$('#input-dataupdate').removeClass('invalidado');
									$('#input-dataupdate').removeClass('validado');

							});
				</script>";

				$erro += 1;
}
else {
	echo "<script>
								$('#input-dataupdate').blur(function(){

									document.getElementById('msg-dataupdate').innerHTML = ' ';
									$('#input-dataupdate').addClass('invalidado');

								});
				</script>";
}


//echo $erro;


	    if($erro == 0) {
	      $_SESSION['updateconfg'] = 1;
	    }else{
	      $_SESSION['updateconfg'] = 0;
	    }




?>
