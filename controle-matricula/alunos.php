<?php
// defini��es de host, database, usu�rio e senha 
// conecta ao banco de dados 

$host = "localhost";
$db = "mydb";
$user = "root";
$pass = "";
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(), E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar 
mysql_select_db($db, $con);
// cria a instru��o SQL que vai selecionar os dados 
$query = sprintf("SELECT aca_nome FROM academicos");
// executa a query 
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram 
$total = mysql_num_rows($dados);
?>
<!DOCTYPE html>
<html class="ls-theme-green">
    <head>
        <title>P�gina com a estrutura inicial</title>


    </head>
    <body>



                    <?php
                    // se o n�mero de resultados for maior que zero, mostra os dados 

                    if ($total > 0) {
                        do {
                            
                            ?> <table style="text-align: center"><tr>
                                    <td><?= $linha['aca_nome'] ?></td>
                                </tr></table> 
                            <?php
                            // finaliza o loop que vai mostrar os dados 
                        } while ($linha = mysql_fetch_assoc($dados));
// fim do if 
                    }
                    ?>
                    <?php

                        echo $total;

                    ?>
               


    </body>
</html>

<?php
// tira o resultado da busca da mem�ria 
mysql_free_result($dados);
?>
