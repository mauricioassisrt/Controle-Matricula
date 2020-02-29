
<meta charset="utf-8"/>
<?php
include "conecta.php";
$cpf = $_POST['cpf'];
$entrar = $_POST['entrar'];
//$id=$elemento["aca_id"];
//$nome=$elemento["aca_nome"];

if (isset($entrar)) {
    $verificaChamada=mysqli_query($link, "SELECT a.aca_id, a.aca_nome FROM academicos a, chamada c WHERE a.aca_id = c.aca_id and a.aca_cpf = '$cpf' ");
    $lin=mysqli_fetch_array($verificaChamada);

    $id=$lin['aca_id'];

    $verificaQuestionario = mysqli_query($link, "SELECT aca_id FROM questionario WHERE aca_id = $id ");
    


    $contQuestiona=mysqli_num_rows($verificaQuestionario);
    $contChamada=mysqli_num_rows($verificaChamada);

    echo $contQuestiona;
    echo $contChamada;

        if (($contChamada<1) or ($contQuestiona>0)) {
           echo "<meta charset='utf-8'/><script language='javascript' type='text/javascript'>alert('CPF Incorreto ou questionario ja foi preenchido!');window.location.href='consulta_cpf.php';</script>";
     } else {
        //setcookie("cpf", $cpf);
        header("location:insere_questionario.php?id=$id");
        // header("Location:index2.php");
    }
}
    
