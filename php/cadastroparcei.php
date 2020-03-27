<?php

		include 'conexao.php';

		$nomep = $_POST["nomepa"];
		$juridico = $_POST["nomepaj"];
		$cnpj = $_POST["cnpjpa"];
		$telefonep =  $_POST["telefonespa"];
		$email = $_POST["emailpa"];
		$senha =  $_POST["senhapa"];
		$confirmarzoma = $_POST["senhaconfirpa"];

		if (strlen($nomep) <= 2 || strlen($nomep) > 32)
		{

			echo "<script>
							alert('Nome inválido!');
							history.back();
					 </script>";

		}

		else if (strlen($juridico) <= 3 || strlen($juridico) > 32)
		{

			echo "<script>
							alert ('Nome Juridico inválido!');
							history.back();
						</script>";

		}

	  else if (strlen($cnpj) <= 13 || strlen($cnpj) > 14)
	   {

	     echo "<script>
	             alert ('CNPJ inválido!');
	             history.back();
	           </script>";

	   }
	   else if (strlen($telefonep) <= 7 || strlen($telefonep) > 11)
	   {

	     echo "<script>
	             alert ('Telefone inválido!');
	             history.back();
	           </script>";

	   }
	    else if (strlen($email) <= 1 || strlen($email) > 39)
	   {

	     echo "<script>
	 			alert ('Email inválido!');
	 			history.back();
	           </script>";
	   }
	   else if ($senha == "")
		 {

	       echo "<script>
	             alert ('Senha não foi inserida');
	             history.back();
	             </script>";
	   }
	    else if ($senha == $confirmarzoma)
	   {

	     echo "<script>
	             alert ('As senhas conferem!!!');
	             history.back();
	           </script>";
						 $query_insert = "INSERT INTO parceiros(nome,nomejuri,cnpj,telefone,email,senha) VALUES ('$nomep','$juridico','$cnpj','$telefonep','$email','$senha')";
					 	$insere = mysqli_query($conexao,$query_insert);
					 	//echo $query_insert;exit;
					 			if ($insere == 1)
					 			{
					 				echo "<script>
					 									alert('Dados inseridos com sucesso!');
					 									history.back();
					 							</script>";
					 			}
					 			else {
					 					echo "<script>
					 									alert('ocorreu um erro!');
					 									history.back();
					 								</script>";
					 	}
	   }  else {
	    echo "<script>
	         alert('ocorreu um erro! Senhas não conferem');
	         history.back();
	         </script>";
		}



  ?>
