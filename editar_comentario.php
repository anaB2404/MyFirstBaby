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
    <link rel="stylesheet" href="cssmyfirst/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/Logo_Perfeito.png">


	<!--

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


  </head>
  <body>


						 <?php session_start();
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

            include 'php/conexao.php';
           	$idcomentario=$_GET["id"];
           	$query="SELECT * FROM comentario where id_comentario = $idcomentario";
           	$execulta=mysqli_query($conexao,$query);
           	$dados=mysqli_fetch_array($execulta);
            $query_select = "SELECT foto_perfil FROM usuario where id_usuario = $idusuario";
            $rodanenem = mysqli_query($conexao,$query_select);
            $mostrabb = mysqli_fetch_array($rodanenem);
            $foto_perfil = $mostrabb["foto_perfil"];

             ?>


             <div class="container-fluid posicao banner" style="position:relative">
                                   <form  action="php/update_comentario.php" method="get">
                                     <div class="form-control">
                                       <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="imagens/<?php echo  $foto_perfil ?>" alt="Avatar">
                                     <div class="form-group shadow-textarea">
                                       <br>
                                       <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Escreva sua publicação aqui" name="comentario"><?php echo $dados['comentario']; ?></textarea>
                                       <ul>
                                         <li><!--<i style="font-size:24px" class="fa">&#xf118;</i></li>-->
                                       </ul>
                                       <input type="hidden" name="id" value="<?php echo $idcomentario?>">
                                       <button  class="btn  btn-outro">Enviar</button>
                                     </div>
                                   </div>
                                 </form>
                        <br>
                        <br>
                      </div>


                          <style>

                          .form-control{
                            border-radius: 5px;
                            margin-top: 20%;
                            display: block;
                            width: 100%;
                            height: inherit;
                          }

                          /* postagem */

                          .shadow-textarea textarea.form-control::placeholder {
                            font-weight: 300;
                          }
                          .shadow-textarea textarea.form-control {
                            padding-left: 0.8rem;

                          }
                          .shadow-textarea{
                            width: 65%;
                            margin-left: 30%;
                            margin-top: -9%;
                          }

                          /*buttons postagem*/

                          .form-group li{
                            display: inline-block;
                            margin-right: 5px;

                          }

                          .form-group ul{
                            margin-left: -25%;
                            margin-top: 2%;
                          }


                          .form-group button {
                            color:#000000;
                            background-color: #FFFFFF;
                            text-decoration:none;
                          }

                          .form-group button a {
                            color:#000000;
                            text-decoration:none;
                          }

                          .form-group button:hover{
                            background-color: #000000;
                            color:#FFFFFF;
                            text-decoration:none;


                          }

                          .form-group button{
                            display: inline-block;
                            margin-left:66%;
                            margin-top: -25%;
                            color:#000000;
                            border-color: #000000;
                            margin-bottom: -30px;
                          }

                          .form-group button a:hover{
                            color:#FFFFFF;
                            background-color: #000000;

                          }

                          form {
                            padding-left: 28%;
                            padding-right: 29%;
                            border-radius: 5px;
                            border-color: red;
                          }


                          .avatar {
                            width: 64px;
                            margin-left: 6%;
                            border-radius: 40px;
                          }

                          .form-group textarea{
                            margin-left: -15%;
                            margin-top:5%;

                          }


                          </style>




  </body>
</html>
