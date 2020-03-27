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

	$data= $_POST["data"];
	$tamanho_data = strlen($data);

	$erro=0;

// VALIDAÇÃO TAMANHO NOME

if ($tamanho_nome > 32 && $tamanho_nome <= 2){

	echo "<script>
								$('#input-nomebb').blur(function(){

									document.getElementById('msg-nomeubb').innerHTML = 'Nome Inválido!';
									$('#input-nomeubb').addClass('invalidado');

								});
				</script>";

				$erro += 1;

}else if(empty($nome)){
				echo "<script>
							$('#input-nomebb').blur(function(){

									document.getElementById('msg-nomebb').innerHTML =  '';
									$('#input-nomebb').removeClass('invalidado');
									$('#input-nomebb').removeClass('validado');

							});
				</script>";

				$erro += 1;
}else{
	echo "<script>
							$('#input-nomebb').blur(function(){

									document.getElementById('msg-nomebb').innerHTML = ' ';
									$('#input-nomebb').removeClass('invalidado');
									$('#input-nomebb').addClass('validado');

							});
				</script>";


}

if ($tamanho_sobrenome > 0 && $tamanho_sobrenome <= 2){

	echo "<script>
								$('#input-sobrenomebb').blur(function(){

									document.getElementById('msg-sobrenomebb').innerHTML = 'Sobrenome Inválido!';
									$('#input-sobrenomebb').addClass('invalidado');

								});
				</script>";

				$erro += 1;

}else if(empty($sobrenome)){
				echo "<script>
							$('#input-sobrenomebb').blur(function(){

									document.getElementById('msg-sobrenomebb').innerHTML =  '';
									$('#input-sobrenomebb').removeClass('invalidado');
									$('#input-sobrenomebb').removeClass('validado');

							});
				</script>";

				$erro += 1;
}else{
	echo "<script>
							$('#input-sobrenomebb').blur(function(){

									document.getElementById('msg-sobrenomebb').innerHTML = ' ';
									$('#input-sobrenomebb').removeClass('invalidado');
									$('#input-sobrenomebb').addClass('validado');

							});
				</script>";


}

if($tamanho_data == 10){
list($dia, $mes, $ano) = explode('/', $data);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
if($idade > 4){


				echo "<script>
											$('#input-databb').blur(function(){

												document.getElementById('msg-databb').innerHTML = 'Um bebê tem de 0 à 4 anos';
												$('#input-databb').addClass('invalidado');

											});
							</script>";
					$erro += 1;


}else{

	echo "<script>
						 $('#input-databb').blur(function(){

								 document.getElementById('msg-databb').innerHTML = ' ';
								 $('#input-databb').removeClass('invalidado');
								 $('#input-databb').addClass('validado');

						 });
			 </script>";
}
}
else if(empty($data)){
			echo "<script>
						$('#input-databb').blur(function(){

								document.getElementById('msg-databb').innerHTML =  '';
								$('#input-databb').removeClass('invalidado');
								$('#input-databb').removeClass('validado');

						});
			</script>";

			$erro += 1;
}
else {
echo "<script>
							$('#input-databb').blur(function(){

								document.getElementById('msg-databb').innerHTML = ' ';
								$('#input-databb').addClass('invalidado');

							});
			</script>";
}

//echo $erro;

if($erro == 0) {
	$_SESSION['updateconfgbb'] = 1;
}else{
	$_SESSION['updateconfgbb'] = 0;
}


?>
