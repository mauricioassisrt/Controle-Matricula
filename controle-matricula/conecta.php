<?php
$servidor = "localhost";
$banco = "matricula";
$usuario = "root";
$senha = "";
$link = mysqli_connect($servidor, $usuario, $senha, $banco);
mysql_select_db($banco);


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

