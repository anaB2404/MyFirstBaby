<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
            My First Baby
      </title>

    <link rel="icon" href="imagens/icon.png">
    <link rel="stylesheet" href="bootstrap-3.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssmyfirst/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/Logo_Perfeito.png">


	<!--

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


  </head>
  <body>


						 <?php include 'navbar-semlog.php';

                include 'php/conexao.php';
                $query = "SELECT a.id_postagem,a.titulo,a.conteudo,a.data_hora,b.id_usuario,b.foto_perfil,a.imagem,b.nome as nome FROM postagem AS a INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario ORDER BY a.id_postagem DESC  ";
                $executa = mysqli_query($conexao,$query);

              //  echo print_r($_SESSION);

                while($dados= mysqli_fetch_array($executa)){

                  ?>


                   			<div class="col-lg-6 col-md-offset-3">
                   				<!-- BEGIN Portlet PORTLET-->
                   				<div class="portlet portlet-bordered">
                   					<div class="portlet-title">
                   						<div class="caption caption-red">
                   							<img class="d-flex rounded-circle icon z-depth-1-half mr-3" src="imagens/<?php echo  $dados["foto_perfil"]; ?>" alt="Avatar">
                                <h5 class="caption-subject"><?php echo  $dados["nome"];?></h5>
                                <p class="caption-subject"><?php $d = explode(" ", $dados["data_hora"]);
                                $data = explode("-", $d[0]);
                                echo "$data[2]/$data[1]/$data[0] às $d[1]";
                                ?></p>
                                <!--<p class="caption-subject"><?php// echo  $dados["data_hora"];?></p>-->
                   						</div>
                   						<div class="actions">
                   						</div>
                   					</div>
                            <div class="portlet-body">
                              <?php if($dados["imagem"] == "") {?>
                   						<h2><?php echo  $dados["titulo"]; ?></h2>
                   						<p><?php echo  $dados["conteudo"]; ?></p>
                              <?php }else {?>
                              <h2><?php echo  $dados["titulo"]; ?></h2>
                              <p><?php echo  $dados["conteudo"]; ?></p>
										          <h6 class="ajuste"><img src="imagens/<?php echo  $dados["imagem"]; ?>" style="display:"/></h6>
                              <?php } ?>
                   					</div>
                   				</div>
                   				<!-- END Portlet PORTLET-->
               			</div>

                     <?php } ?>
                    <style>
                              /* Portlet */
                              .portlet {
                              padding: 12px;
                              margin-top: 100px;
                              }
                    </style>














  </body>
</html>
