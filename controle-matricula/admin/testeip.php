<?php
include('conecta.php');
//pega o ip da maquina do cliente
$ipcliente=$_SERVER["REMOTE_ADDR"];
echo $ipcliente;
?>