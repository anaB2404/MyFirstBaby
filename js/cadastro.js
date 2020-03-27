/*Ajax do formulário de cadastro do usuário (Validação do cadastro)*/
function verificarCadastro(){

    $.ajax({
        url: 'php/cadastro.php',
        type: 'POST',
        data: $('#formCadastro').serialize(),
        success: function(data){
            $('.msg-cadastro').html(data);
        }
    });

    return false;
}

$(document).ready(function(){
  $("#input-data").mask("99/99/9999");
});

$().ready(function(){

  $('#formCadastro').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/cadastrar.php',
      type:'POST',
      data: $('#formCadastro').serialize(),
      success: function(data){
        $('#envia-cadastro').html(data);
      }
    });
  });
});

// VALIDAÇÃO MAE PAPAI
function verificarCadastroMP(){

    $.ajax({
        url: 'php/cadastromp.php',
        type: 'POST',
        data: $('#formCadastromp').serialize(),
        success: function(data){
            $('.msg-cadastromp').html(data);
        }
    });

    return false;
}

$(document).ready(function(){
  $("#input-datamp").mask("99/99/9999");
});

$().ready(function(){

  $('#formCadastromp').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/cadastrarmp.php',
      type:'POST',
      data: $('#formCadastromp').serialize(),
      success: function(data){
        $('#envia-cadastromp').html(data);
      }
    });
  });
});

// VALIDAÇAÕ GESTANTE

function verificarCadastroGest(){

    $.ajax({
        url: 'php/cadastrogest.php',
        type: 'POST',
        data: $('#formCadastrogest').serialize(),
        success: function(data){
            $('.msg-cadastrogest').html(data);
        }
    });

    return false;
}

$(document).ready(function(){
  $("#input-datagest").mask("99/99/9999");
});

$().ready(function(){

  $('#formCadastrogest').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/cadastrargest.php',
      type:'POST',
      data: $('#formCadastrogest').serialize(),
      success: function(data){
        $('#envia-cadastrogest').html(data);
      }
    });
  });
});

//VALIDAÇÃO PARCEIROS

function verificarCadastroP(){

    $.ajax({
        url: 'php/parceimen.php',
        type: 'POST',
        data: $('#formCadastrop').serialize(),
        success: function(data){
            $('.msg-cadastrop').html(data);
        }
    });

    return false;
}


$(document).ready(function(){
  $("#input-telefone").mask("(99) 9999-9999");
  $("#input-celular").mask("(99) 99999-9999");
});

$().ready(function(){

  $('#formCadastrop').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/cadastrarmensagem.php',
      type:'POST',
      data: $('#formCadastrop').serialize(),
      success: function(data){
        $('#envia-cadastrop').html(data);
      }
    });
  });
});

// UPDATE CONFIG

$(document).ready(function(){
  $("#input-dataupdate").mask("99/99/9999");
});

function verificarCadastroUpdate(){

    $.ajax({
        url: 'php/configuracoes_paimae.php',
        type: 'POST',
        data: $('#formUpdate').serialize(),
        success: function(data){
            $('.msg-update').html(data);
        }
    });

    return false;
}

$().ready(function(){

  $('#formUpdate').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/updateconfg.php',
      type:'POST',
      data: $('#formUpdate').serialize(),
      success: function(data){
        $('#envia-update').html(data);
      }
    });
  });
});


// UPDATE CONFG BEBE

function verificarCadastroUpdateBB(){

    $.ajax({
        url: 'php/configuracoes_bebe.php',
        type: 'POST',
        data: $('#formUpdatebb').serialize(),
        success: function(data){
            $('.msg-updatebb').html(data);
        }
    });

    return false;
}

$(document).ready(function(){
  $("#input-databb").mask("99/99/9999");
});

$().ready(function(){

  $('#formUpdatebb').submit(function(event){
    event.preventDefault();

    $.ajax({
      url: 'php/updateconfgbebe.php',
      type:'POST',
      data: $('#formUpdatebb').serialize(),
      success: function(data){
        $('#envia-updatebb').html(data);
      }
    });
  });
});
