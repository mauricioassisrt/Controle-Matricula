<!DOCTYPE html>
<?php
//session_start();
include ("conecta.php");
require("verificaselogado.php");  
?>
<html class="ls-theme-green">
  <head>
    <title>Sistema de controle de Matriculas</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.8.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);
            }
        </script>
  </head>
  <body>
    

    <?php
      include("menusuperior.php");
    ?>

    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <?php
      //insere menu lateral esquerdo na pagina
        include("menuesquerdo.php");
      ?>
  </div>
</aside>
        
    
        <main class="ls-main ">
            <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-user"> Questionário </h1>
               
                <form  class="ls-form ls-form-horizontal" data-ls-module="form" method="POST" action="verifica_academico.php" >


                    <label class="ls-label col-md-3">
                        <b class="ls-label-text">CPF</b>
                        <input type="text" name="cpf" id="cpf">
                    </label>
                    <input type="submit" class="ls-btn"  value="entrar" id="entrar" name="entrar"/>
                </form>

            </div><!-- /.modal -->
             </main>
    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.8.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>







     