<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = '2016_matriculas_sisu';
// Conecta-se ao banco de dados MySQL
$link = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($link, "utf8");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

//mysqli_close($link);