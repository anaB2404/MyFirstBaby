<html>
	<head>
		<title>
			Editor de texto
		</title>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

		<style>
				.form-group{
					margin-top: 10%;


				}
		</style>
	</head>
	<body>


		<?php

		session_start();
		//print_r($_SESSION);exit;
		if(isset($_SESSION["id_usuario"])){
			$idusuario =  $_SESSION["id_usuario"];
		}else{
				$idusuario =  $_SESSION["id_usuario_log"];
		}

		//  echo print_r($_SESSION);
			if(isset($_SESSION["tipo_usuario"])){
			 $idtipousuario =  $_SESSION["tipo_usuario"];
		 }else{
				 $idtipousuario =  $_SESSION["fk_tipo_usuario"];
		 }

		 if ($idtipousuario == 1) {
			 include  'navbarr.php';
		 }else {
			 include 'navbar_usuario.php';
		 }
 ?>
			<form class="form-group" action="php/postagem_adm.php" method="post" enctype="multipart/form-data">
				<input type="text" name="titulo"/>
				<textarea id="ckeditor" class="ckeditor" name="texto">
				</textarea>
				<textarea id="ckeditor" class="ckeditor" name="resumo">
				</textarea>
				<select name="categorias" method="post">
					<option value="1"> Saúde </option>
					<option value="2"> Nutrição</option>
					<option value="3"> Pré-Natal</option>
					<option value="4"> Papais </option>
				</select>
				<input type="file" name="imagem"/>
				<input type="submit"/>
			</form>

	</body>
</html>
