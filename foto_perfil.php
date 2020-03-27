<html>
	<head>
		<title>

		</title>

		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="/assets/css/material-kit.css?v=2.0.3">

		<style>
		     body{ background-image: url(imagens/nuvem.jpg);

			 }
			 @font-face {
			 font-family: 'MotiraItalic';
			 src: url('fonts/MotiraItalic.eot');
			 src: url('fonts/MotiraItalic.eot') format('embedded-opentype'),
			 url('fonts/MotiraItalic.woff2') format('woff2'),
			 url('fonts/MotiraItalic.woff') format('woff'),
			 url('fonts/MotiraItalic.ttf') format('truetype'),
			 url('fonts/MotiraItalic.svg#MotiraItalic') format('svg');
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

			<div class="container-fluid">

					<form action="php/upload_bebe.php" method="post" enctype="multipart/form-data">
						<p class="fileinput-new" style=" margin-top:12%; margin-left:55px; font-family:'MotiraItalic'; font-size:3em; font-weight:bolder;">Selecione uma imagem para o seu perfil</p>
							<div class="fileinput fileinput-new" data-provides="fileinput" >
								<div class="fileinput-new thumbnail img-raised" style="width:12vw; margin-left:15%; height:30%;">
									<img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
								</div>
							<div>
						<div style=" font-size:16px; margin-left:10%; margin-top:1%; font-weight:bolder;">
							<input type="file" name="imagem"/>
						</div>
						</div>
						</div>
						<div>
						<p class="fileinput-new" style=" margin-left:55%; margin-top:-23.1%; font-family:'MotiraItalic'; font-size:3em; font-weight:bolder;">Selecione uma imagem para o seu bebê</p>
						<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail img-raised" style="width:12vw; height:30%; margin-left:66%;">
						<img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
						<div>
								<div style=" margin-left:-55%; font-size:16px; margin-top:14%; font-weight:bolder;">
								<input type="file" name="imagembb"/>
								</div>
						</div>
						</div>
						</div>

					<button style="margin-top:20px; margin-left:86%; margin-top:5%;" type="submit" class="btn btn-labeled btn-success">Adicionar</button>

					</form>
				</div>

			</div>

					<!--   Core JS Files   -->
			<script src="/assets/js/core/jquery.min.js"></script>
			<script src="/assets/js/core/popper.min.js"></script>
			<script src="/assets/js/bootstrap-material-design.js"></script>

			<!-- Plugin for Date Time Picker and Full Calendar Plugin-->
			<script src="/assets/js/plugins/moment.min.js"></script>

			<!-- Plugin for Select, full documentaion here: http://silviomoreto.github.io/bootstrap-select -->
			<script src="/assets/js/plugins/bootstrap-selectpicker.js"></script>

			<!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
			<script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>

			<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
			<script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>

			<!-- Plugin for Small Gallery in Product Page -->
			<script src="/assets/js/plugins/jquery.flexisel.js"></script>

			<!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
			<script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

			<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
			<script src="/assets/js/plugins/nouislider.min.js"></script>

			<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
			<script src="/assets/js/material-kit.js?v=2.0.3"></script>
	</body>
</html>
