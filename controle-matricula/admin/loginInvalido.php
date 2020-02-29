<?php
	$usuario = $_GET['usu'];
	$ativo = $_GET['ativo'];
	$teste = $_GET['teste'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />

<title>UNESPAR</title>
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {color: #FF0000}
.style3 {color:#0066CC}
-->
</style>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		<!--header -->
  <div id="header">

	  <h1 id="logo-text">&nbsp;</h1>
  </div>
		<!-- menu -->
		<!--<div  id="menu">
			<ul>
				<li id="current"><a href="inicio.php">Inicio</a></li>
				<li><a href="servicos.php">Servi&ccedil;os</a></li>
				<li><a href="parceiros.php">Parceiros</a></li>
				<li><a href="links.php">Links</a></li>
				<li><a href="localizacao.php">Localiza&ccedil;&atilde;o</a></li>
				<li class="last"><a href="contato.php">Contato</a></li>
			</ul>
		</div>-->

		<!-- content-wrap starts here -->
		<div id="content-wrap">
		  <p>
	      <div align="center">
		  <h1 align="center">Area de Administração</h1><br>
	<form method="post" action="verificaLogin.php?acao=logar">
<!-- verifica se o problema é que o usuario não tem login ou o se somente não está validado -->
<?php if (( $usuario == '0') and ($ativo == '')){ ?>
	  <div align="center" class="style2">Login ou Senha inválida! </div>
<?php }elseif(($usuario <> '0') and ($ativo	 <> 'S')){?>
	  <div align="center" class="style2">Aguarde validação dos seus dados! </div>

	<?php }
	echo "Usuario: $usuario<br>ativo: $ativo <br> Teste: $teste";
	?>

	  <table align="center">
	<tr>
	<tr><td class="style16">
E-mail:</td>
<td>
<input type="text" id="campoEmail" name="campoEmail"></td></tr>
	<tr><td valign="top" class="style16">
Senha:</td>
	<td>
<input type="password" id="campoSenha" name="campoSenha"> </td></tr>
<tr><td colspan="2">
  <div align="center">
    <div align="center">
      <input type="submit" value="Entrar">
    </div></td></tr>
</table>
<div align="center" class="style3"><a href="../usuarios2.php?Acao=Inserir">Clique aqui para efetuar o cadastro</a> </div>
	</form>
    </div>
		  <p align="justify">&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>

		</div>
					
		<!--footer starts here-->
		<?php
		include"footer.php";
		?>

<!-- wrap ends here -->
</div>

</body>
</html>
