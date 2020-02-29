
<meta charset="utf-8"/>
<?php
$ids = $_POST['ids'];
$entrar = $_POST['entrar'];
$connect = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('mydb');

if (isset($entrar)) {
    $verificaChamada = mysql_query("SELECT a.curso_cur_id  FROM academicos a, chamada c WHERE a.curso_cur_id = c.aca_id") or die("erro ao selecionar");
    $verificaQuestionario = mysql_query("SELECT * FROM academicos WHERE aca_cpf = '$cpf' ") or die("erro ao selecionar");
  //
    if (mysql_num_rows($verificaChamada) <= 0) {
        echo "<script language='javascript' type='text/javascript'>alert('CPF incorreto');window.location.href='index.php';</script>";
          die();
    } else {
       
        header('Location: /controle-matricula/classificado.php');
        // header("Location:index2.php");
    }

}
