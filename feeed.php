<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        My First Baby
    </title>
    <style>
        body {
            background-image: url(imagens/nuvem.jpg);
        }
        }

    </style>
    <link rel="icon" href="imagens/icon.png">
    <link rel="stylesheet" href="bootstrap-3.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssmyfirst/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="imagens/Logo_Perfeito.png">


    <!--

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


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

                include 'php/conexao.php';
                $query = "SELECT a.id_postagem,a.titulo,a.conteudo,a.id_fk_usuario,a.data_hora,a.imagem,b.id_usuario,b.nome as nome,b.foto_perfil as foto_perfil FROM postagem AS a
                INNER JOIN usuario AS b ON a.id_fk_usuario = b.id_usuario WHERE b.fk_id_tipo_usuario != 1 ORDER BY a.id_postagem DESC";
                $executa = mysqli_query($conexao,$query);

                $query_foto = "SELECT foto_perfil as foto FROM usuario where id_usuario = $idusuario";
                $rodafoto = mysqli_query($conexao,$query_foto);
                $fetchfoto = mysqli_fetch_array($rodafoto);





             ?>

    <div class="container-fluid posicao banner" style="position:relative;">
        <form action="php/insereconteudouser.php" method="post">
            <div class="form-control">
                <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="imagens/<?php echo  $dados["foto_perfil"]; ?>" alt="Avatar">
                <div class="form-group shadow-textarea">
                    <br>
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Escreva sua publicação aqui" name="texto"></textarea>
                    <ul>
                        <li>
                            <!--<i style="font-size:24px" class="fa">&#xf118;</i></li>-->
                    </ul>
                    <button class="btn  btn-outro">Enviar</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <?php

                while($dados= mysqli_fetch_array($executa)){


                  ?>

        <div class="col-lg-8 col-md-offset-2">
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
                        <p class="caption-subject"><?php if ($idtipousuario == 1) {?> Usúario <?php }else {?> Administrador <?php } ?></p>
                    </div>
                    <?php if($idusuario == $dados["id_fk_usuario"] || ($idtipousuario == 1))  {?>
                    <div class="actions">
                        <a <?php if($idtipousuario == 1){?>href="editar_adm.php?id=<?php echo $dados['id_postagem'];?>" <?php }else {?>href="editar.php?id=<?php echo $dados['id_postagem'];?>" <?php }?> class="btn btn-red btn-circle">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="php/excluir.php?id=<?php echo  $dados['id_postagem'];?>" class="btn btn-red btn-circle">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <!--<a href="javascript:;" class="btn btn-red btn-circle">
                   								<i class="glyphicon glyphicon-search"></i>
                   							</a>-->
                    </div>
                    <?php }else{ ?>
                    <div class="actions">
                    </div>
                    <?php } ?>


                </div>
                <div class="portlet-body">
                    <?php if($dados["imagem"] == "") {?>
                    <h2><?php echo  $dados["titulo"]; ?></h2>
                    <p><?php echo  $dados["conteudo"]; ?></p>
                    <?php }else {?>
                    <h2><?php echo  $dados["titulo"]; ?></h2>
                    <p><?php echo  $dados["conteudo"]; ?></p>
                    <h6 class="ajuste"><img src="imagens/<?php echo  $dados["imagem"]; ?>" /></h6>
                    <?php } ?>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-offset-1">
                            <img src="imagens/<?php echo  $fetchfoto["foto"]; ?>" class="iconn" />
                        </div>
                        <div class="col-md-8 col-md-offset-1 form-controll">
                            <form action="php/comentarios.php" method="post">
                                <input type="hidden" name="id_post" value="<?php echo  $dados["id_postagem"]; ?>" />
                                <textarea class="form-control counted" name="comentario" placeholder="Deixe seu comentario" rows="3" style="margin-left:85px;"></textarea>
                                <button class="btn btn-outro pull-right" type="submit" style="margin-right:-75px;margin-top:2%;">Comentar</button></a>
                            </form>
                        </div>
                    </div>
                    <?php
                                    $id_post = $dados["id_postagem"];
                                    /*
                                    $query_select = "SELECT a.comentario,a.data_hora as data,b.foto_perfil as foto_do_perfil,b.nome as nomeuser FROM comentario AS a
                                    INNER JOIN usuario AS b, postagem AS c WHERE c.id_postagem = a.id_fk_postagem AND b.id_usuario = a.id_fk_usuario AND a.id_fk_postagem = c.'.$id_post.'";
                                    $executa_query = mysqli_query($conexao,$query_select);*/
                                    $query_select = ("SELECT * FROM comentario INNER JOIN usuario ON (id_fk_usuario = id_usuario) where id_fk_postagem = $id_post ORDER BY id_comentario DESC");
                                    $executa_query = mysqli_query($conexao, $query_select);
                                    while($dadosc = mysqli_fetch_array($executa_query)){
                                      if($idusuario == $dadosc["id_fk_usuario"] || ($idtipousuario == 1))  {
                                      ?>
                    <div class="actions" style="margin-right:5%;">
                        <a <?php if($idtipousuario == 1){?>href="editar_comentario.php?id=<?php echo $dadosc['id_comentario'];?>" <?php }else {?>href="editar_comentario.php?id=<?php echo $dadosc['id_comentario'];?>" <?php }?> class="btn btn-red btn-circle" style="margin-top:45%;">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="php/excluir_comentario.php?id=<?php echo  $dadosc['id_comentario'];?>" class="btn btn-red btn-circle" style="margin-top:45%;">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </div>
                    <?php }else { ?>
                    <div class="actions">
                    </div>
                    <?php } ?>
                    <div class="row clear">
                        <hr>
                        <div class="col-md-2 col-md-offset-1">
                            <img src="imagens/<?php echo  $dadosc["foto_perfil"]; ?>" class="iconn" />
                        </div>
                        <div class="col-md-8 ">
                            <h5 class="caption-subject"><?php echo  $dadosc["nome"]; ?></h5>
                            <p><?php $d = explode(" ", $dadosc["data_hora"]);
                                    $data = explode("-", $d[0]);
                                    echo "$data[2]/$data[1]/$data[0] às $d[1]";
                                    ?></p>
                            <h6><?php echo  $dadosc["comentario"]; ?></h6>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <style>
        .form-group button {
            color: #000000;
            background-color: #FFFFFF;
            text-decoration: none;
            display: inline-block;
            margin-left: 180px;
            margin-top: -100px;
            border-color: #000000;
            margin-bottom: -30px;
        }

        .form-group button:hover {
            background-color: #4b93c6;
        }

        .form-control {
            border-radius: 5px;
            margin-top: 20%;
            display: block;
            width: 100%;
            height: inherit;
        }

        .form-controll {
            margin-top: 8%;
            display: block;
        }

    </style>








    <style media="screen">
        .form-group button {
            color: #000000;
            background-color: #FFFFFF;
            text-decoration: none;
            display: inline-block;
            margin-left: 290px;
            margin-top: -80px;
            border-color: #000000;
            margin-bottom: -30px;
        }



        .form-control {
            border-radius: 5px;
            margin-top: 20%;
            display: block;
            width: 100%;
            height: inherit;
        }

        .form-controll {
            margin-top: 8%;
            display: block;
        }

    </style>





</body>
<footer class="containerr-fluidd text-center ">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Copyright © My First Baby 2017. Todos os direitos reservados.</p>
    <ul class="fa-ul">
        <li class="carta"><span class="fa-li"><a id="carta1" href="#"><i class="fab fa-facebook-square"></a></i></span></li>
        <li class="carta"><span class="fa-li"><a id="carta2" href="#"><i class="fab fa-instagram"></a></i></span></li>
        <li class="carta"><span class="fa-li"><a id="carta3" href="#"><i class="fas fa-envelope"></a></i></span></li>
    </ul>
</footer>

<style>
    .containerr-fluidd {
        padding: 60px 50px;

    }


    /*Rodapé*/
    footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #f18cb4;
    }

    /*icones*/
    .fa-ul {
        float: right;
        font-size: 23px;
        padding-top: 2%;

        list-style: none;
        margin-left: 10px;

    }

    .fa-ul span {
        margin-bottom: 30%;
        margin-left: -440px;
    }

    .carta {
        display: inline;
        padding: 40px;

    }

    #carta1:hover {
        color: #3b5998;

    }

    #carta2:hover {
        color: #e4405f;
    }

    #carta3:hover {
        color: #c71610;
    }

</style>
<script>
    $(document).ready(function() {
        // Adicionando uma rolagem suave para todos os links no link navbar + footer
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                // Usando o método animate () do jQuery para adicionar uma página suave
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function() {
                    window.location.hash = hash;
                });
            }
        });
    })

</script>

</html>
