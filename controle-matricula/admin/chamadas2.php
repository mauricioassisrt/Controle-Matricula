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
        <h1 class="ls-title-intro ls-ico-user">Chamadas</h1>

              
<?php 
            $ids = $_POST["curso"];
            $query3="select cam_id from curso where cur_id = $ids";
            $resul3=mysqli_query($link,$query3);
            $linha3=mysqli_fetch_array($resul3);
            $campus=$linha3['cam_id'];

            $consulta="select a.aca_nome, a.aca_pontuacao, a.aca_classificacao,a.cur_id,ch.cha_convocacao
              from chamada ch RIGHT JOIN academicos a ON ch.aca_id = a.aca_id
              iNNER JOIN curso c ON c.cur_id = a.cur_id 
              INNER JOIN  usuario u ON c.cam_id=u.cam_id
              AND c.cur_id = $ids and c.cam_id = $campus order by a.aca_classificacao";            
            $query=mysqli_query($link, $consulta);
            $quantidade=mysqli_num_rows($query);
            $i=1;
            echo "<table class='ls-table ls-table-striped'>";
            echo "<tr><td><b>Nome</b></td><td><b>Pontuação</b></td><td><b>Classificação</b></td><td><b>Convocação</b></td></tr>";
            while ($i <= $quantidade){
                $linha=mysqli_fetch_array($query);
                
                echo "<td>".$linha['aca_nome']."</td><td>".$linha['aca_pontuacao']."</td><td>".$linha['aca_classificacao']."</td><td>".$linha['cha_convocacao']."</td>
</div></td></tr>";
                $i++;
            }
            echo "</table>";
          
?>
      </div>

    </main>
    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.8.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
