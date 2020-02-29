
<meta charset="utf-8"/>
<?php
include "conecta.php";
$cpf = $_POST['cpf'];
//$entrar = $_POST['entrar'];
//if (isset($entrar)) {
    $verificaChamada=mysqli_query($link, "SELECT a.aca_id, a.aca_nome FROM academicos a, chamada c WHERE a.aca_id = c.aca_id and a.aca_cpf = '$cpf' ") or die("erro ao selecionar");
    //$verificaQuestionario = mysqli_query("SELECT * FROM academicos WHERE aca_cpf = '$cpf' ") or die("erro ao selecionar");
    $elemento=mysqli_fetch_array($verificaChamada);
    $id=$elemento["aca_id"];
    $nome=$elemento["aca_nome"];
  
    if (mysqli_num_rows($verificaChamada) <= 0) {
        echo "<meta charset='utf-8'/><script language='javascript' type='text/javascript'>alert('Academico ou CPF Incorretos!!');window.location.href='consulta_cpf.php';</script>";
          die();
    } else {
        //setcookie("cpf", $cpf);
        header("location:insere_questionario.php?nome=$nome&id=$id");
        // header("Location:index2.php");
    }