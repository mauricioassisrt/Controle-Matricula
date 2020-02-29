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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <style type="text/css">
      .carregando{
        color:#666;
        display:none;
      }
    </style>
    

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

if ((isset($_GET["submit"])<>"Buscar") and (isset($_GET["submit"])<>"search")){ ?>
      <div class="ls-modal-dialog ">
          <div class="modal-body">
          <form action="" class="ls-form row">

    <!--  col-md-2  -->
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Campus:</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="cod_estados" id="cod_estados">
          <option selected="selected">Todos</option>
         <?php
                        $sql = "SELECT cam_id, cam_nome
                                FROM campi
                                ORDER BY cam_nome";
                        $res = mysqli_query($link, $sql);
                        while ( $row = mysqli_fetch_array( $res ) ) {
                            echo '<option value="'.$row['cam_id'].'">'.$row['cam_nome'].'</option>';
                        }
                    ?>
        </select>
      </div>
    </label>

            <!--<form method="get">
            <div class="ls-custom-select">
                <label class="ls-label" for="cod_estados">Campus:</label>
                <select class=" ls-custom" name="cod_estados" id="cod_estados">
                    <option value=""></option>
                    <?php
                        $sql = "SELECT cam_id, cam_nome
                                FROM campi
                                ORDER BY cam_nome";
                        $res = mysqli_query($link, $sql);
                        while ( $row = mysqli_fetch_array( $res ) ) {
                            echo '<option value="'.$row['cam_id'].'">'.$row['cam_nome'].'</option>';
                        }
                    ?>
                </select>
            </div> -->

<label class="ls-label col-md-4">
      <b class="ls-label-text" for="cod_cidade">Curso:</b>
      <span class="carregando">Aguarde, carregando...</span>
      <div class="ls-custom-select">
        <select class="ls-custom" name="cod_cidades" id="cod_cidades">
          <option selected="selected">-- Escolha um Curso --</option>
        </select>
      </div>
      <input class="ls-btn ls-btn-primary ls-btn-lg" type="submit" name="submit" value="Buscar"/>
    </label>

           <!-- <div class="ls-form-group ls-custom-select">
                <label class="ls-label" for="cod_cidades">Curso:</label>
                <span class="carregando">Aguarde, carregando...</span>
                <select class="ls-select" name="cod_cidades" id="cod_cidades">
                    <option value="">-- Escolha um Curso --</option>
                </select>
            </div>
             <div class="ls-form-group">
                <input class="ls-btn ls-btn-primary ls-btn-lg" type="submit" name="submit" value="Buscar"/>
            </div>
            </form>
          </div>
      </div> -->
  <?php
}

if(isset($_GET['submit']) == "Buscar"){
       $campus = $_GET["cod_estados"];
       $curso = $_GET["cod_cidades"];
       
    if ($campus<>"" and $curso<>""){
    $resultado = mysqli_query($link,"select a.aca_id,a.aca_nome, a.aca_pontuacao, a.aca_classificacao,a.cur_id,ch.cha_convocacao
              from chamada ch RIGHT JOIN academicos a ON ch.aca_id = a.aca_id
              iNNER JOIN curso c ON c.cur_id = a.cur_id 
              INNER JOIN  usuario u ON c.cam_id=u.cam_id
              AND c.cur_id = $curso and c.cam_id = $campus order by a.aca_classificacao");
    } else {
      echo "Você tem que escolher as duas opções Campus e Curso";
      echo "<a href='javascript:history.back()' id='dark'>";
    }


    //SELECT PARA PEGAR O NOME DO CAMPUS
    $ncm = "select cam_nome from campi where cam_id = $campus ";
    $ex= mysqli_query($link,$ncm);
    $ar=mysqli_fetch_array($ex);
    $ncm=$ar['cam_nome'];
    

    ?>
    


    <?php
    //SELECT PARA PEGAR O NOME DO CURSO
    $ncr = "select cur_nome from curso where cur_id = $curso ";
    $xe= mysqli_query($link,$ncr);
    $ra=mysqli_fetch_array($xe);
    $ncr=$ra['cur_nome'];
    $ids = $_GET["cod_cidades"];
            $consulta="select aca_nome, aca_id FROM academicos where cur_id = $ids";            
            $query=mysqli_query($link, $consulta);
            $total=mysqli_num_rows($query);


            $consulta1="select aca_nome, a.aca_id FROM academicos a, chamada c  WHERE a.aca_id = c.aca_id and cur_id = $ids;";            
            $query1=mysqli_query($link, $consulta1);
            $quantidade1=mysqli_num_rows($query1);


            $nconvocados = $total - $quantidade1 ;
    
    echo('<table class="ls-table ls-table-border ls-sm-space"');
             echo '<tr><td>Campus:  '  ,$ncm,' </td></tr>';

             echo '<tr><td>Curso:  '  ,$ncr,'</td></tr>'; 
            
             echo '<tr><td>Convocados:  '  ,$quantidade1,'</td></tr>';

             echo '<tr><td>Não convocados: '  ,$nconvocados,' </td></tr>';
           
             echo '<tr><td>Total de alunos:  '  ,$total,' </td></tr>';
    echo('</table>');
?>
<br/>
         <form name="form1" method="post" action="salva-chamada.php">
      <?php

            echo "<div class='modal-dialog' align='center'><table class='ls-table' align='center' border='0'><tr>";
            echo "<td><strong> ...</strong></td><td><strong>Nome</strong></td><td><strong>Pontuação</strong></td><td><strong>Classificação</strong></td><td><strong>Convocação</strong></td></tr>";

                //$busca= mysql_query("SELECT * from inscrito_sisu order by id_inscrito_sisu");
                //$resultado3=mysql_fetch_array($busca3);
                //$pnome=$resultado3['pesNome'];
                 while($row = mysqli_fetch_array($resultado))
                {
                    
          $nome=$row['aca_nome'];
          $pontuacao=$row['aca_pontuacao'];
          $classificação=$row['aca_classificacao'];
          $convocacao=$row['cha_convocacao'];
          $id_aca =$row['aca_id'];
          
          if ($convocacao){
                ?>       
                   <tr style="color: $cor;"> <td> <input type="checkbox" name="sel[]" id="sel[]" value="<?php echo $ids; ?>" disabled="disabled" /></td>     
                <?php 
                } else{
                ?>
                <tr style="color: $cor;"> <td> <input type="checkbox" name="sel[]" id="sel[]" value="<?php echo $id_aca; ?>" /></td>
                <?php
                 }


                ?>

              
               
                <td> <?php echo $convocacao <>'' ? '<span style="color:blue">'.$row['aca_nome'].'<span class="label label-success"> ---Convocado---</span></span>': '<span style="color:red">'.$row['aca_nome'].'</span>','</td><td>'.$row['aca_pontuacao']."</td><td>".$row['aca_classificacao']."</td><td>".$row['cha_convocacao']."</td>
</div></td></tr>";
                
                }
//fecha while

                echo "</table></div>";
            ?>
            <div class="ls-modal-dialog">
        <tr> <td><input class="ls-btn ls-btn-primary ls-btn-lg ls-btn-block" type="submit" value="Enviar" /></td></tr>
                <button class="ls-btn ls-btn-primary ls-btn-lg ls-btn-block" type="button" onclick="history.go(-1)">Voltar</button>
                </div>

      </form>
<!--</table>-->

<?php
}
?>

<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript">
      google.load('jquery', '1.3');
    </script>

    <script charset="utf-8" type="text/javascript">
    $(function(){
      $('#cod_estados').change(function(){
        if( $(this).val() ) {
          $('#cod_cidades').hide();
          $('.carregando').show();
          $.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
            var options = '<option value=""></option>';
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + ' - ' + j[i].turno + ' - ' + j[i].grau +'</option>';
            } 
            $('#cod_cidades').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
        }
      });
    });
    </script>                   
</div>

    </main>
    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.8.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
