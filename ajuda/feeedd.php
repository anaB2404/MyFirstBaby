<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

    <link rel="icon" href="imagens/icon.png">
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/Logo_Perfeito.png">


	<!--

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


  </head>
  <body>


						 <?php include 'navbarr.php'?>


                          <form  action="php/insereconteudouser.php" method="post">
                            <div class="form-control">
                              <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="Avatar">
                            <div class="form-group shadow-textarea">
                              <br>
                              <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Escreva sua publicação aqui" name="texto"></textarea>
                              <ul>
                                <li><i style="font-size:24px" class="fa">&#xf03e;</i></li>
                                <li><i style="font-size:24px" class="fa">&#xf118;</i></li>
                              </ul>
                              <button  class="btn  btn-outro">Enviar</button>
                            </div>
                          </div>
                        </form>
                        <br>
                        <br>
						
						<style>
					
</style>

          <?php

                include 'php/conexao.php';
                $query = "SELECT a.Titulo,a.Conteudo,b.Id_Usuario,b.Nome as Nome FROM postagem AS a INNER JOIN usuario AS b ON a.Id_Fk_usuario = b.Id_Usuario";
                $executa = mysqli_query($conexao,$query);
                while($dados= mysqli_fetch_array($executa)){


                  ?>

                        <div class="row">
                   			<div class="col-lg-6 col-md-offset-3">
                   				<!-- BEGIN Portlet PORTLET-->
                   				<div class="portlet portlet-bordered">
                   					<div class="portlet-title">
                   						<div class="caption caption-red">

                   							<img class="d-flex rounded-circle icon z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="Avatar">
                                <h6 class="caption-subject"><?php echo  $dados["Nome"]; ?></h6>
                   						</div>
                   						<div class="actions">
                   							<a href="javascript:;" class="btn btn-red btn-circle active">
                   								<i class="glyphicon glyphicon-paperclip"></i>
                   							</a>
                   							<a href="javascript:;" class="btn btn-red btn-circle">
                   								<i class="glyphicon glyphicon-pencil"></i>
                   							</a>
                   							<a href="javascript:;" class="btn btn-red btn-circle">
                   								<i class="glyphicon glyphicon-trash"></i>
                   							</a>
                   							<a href="javascript:;" class="btn btn-red btn-circle">
                   								<i class="glyphicon glyphicon-search"></i>
                   							</a>
                   						</div>
                   					</div>
                   					<div class="portlet-body">
                   						<h4><?php echo  $dados["Titulo"]; ?></h4>
                   						<p><?php echo  $dados["Conteudo"]; ?></p>
                   					</div>
                   				</div>
                   				<!-- END Portlet PORTLET-->
               			</div>

                     <?php } ?>
                    <style>

                   
                    </style>













		<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/javascript-site.js"></script>
  </body>
</html>
