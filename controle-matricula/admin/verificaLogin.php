<?php
include('conecta.php');
//pega o ip da maquina do cliente
//$ipcliente=$_SERVER["REMOTE_ADDR"];
session_start();
if($_GET['acao'] == "logar") {

$user = $_POST["campoEmail"];
$senha = $_POST["campoSenha"];
$senha= md5($senha);
$query= "SELECT * FROM usuario WHERE usu_email = '$user' and usu_senha = '$senha'";

// verifica se existe o usuario e carrega o status do usuario dentro da variavel
$resultado2=mysqli_query($link, $query);
$row = mysqli_fetch_array($resultado2);
$ativo = $row["usu_ativo"];
//$ipbanco=$row["usu_ip"];
$acesso=$row["usu_acesso"];

// verifica se existe o usuario
$resultado=mysqli_query($link, $query);

// verifica se houveram resultados para o select acima
$nregistros=mysqli_num_rows($resultado);
// o if abaixo verifica se o usuario já esta cadastrado porem sem validação ou seja status = F
if ($nregistros == 0) {
//abaixo é informad o via get o validar que será recebido pelo index.php e tratado.
$msg="Usuário ou senha Inválida.";
header("Location: index.php?msg=$msg");
} else {
			$registro=mysqli_fetch_array($resultado);
			$id=$registro["usu_id"];
			$nome=$registro["usu_nome"];
			$email=$registro["usu_email"];
			$acesso=$registro["usu_acesso"];
			$campi=$registro["cam_id"];
			//$ip=$registro["usu_ip"];
			//$curso=$registro["cam_id"];

			$_SESSION['id']=$id;
			$_SESSION['nome']=$nome;
			$_SESSION['email']=$email;
			$_SESSION['acesso']=$acesso;
			$_SESSION['cam_id']=$campi;
			//$_SESSION['ip']=$ip;
			//$_SESSION['curso']=$curso;
			//session_register("nome");

header("location: principal.php");
}
}

//if( !isset($session['nome']) ) {
//    header("Location: loginInvalido.php?usu=$nregistros&ativo=$ativo");
//}

?>