<?php
include "conecta.php";
require("verificaselogado.php");
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

<link rel="stylesheet" href="images/Envision.css" type="text/css" />

<title>UNESPAR</title>
</head>

<body>
<!-- wrap starts here -->

<?php
include "menu.php";
?>

        <?php

			?>

		  <p>

		  <h1><strong>Seja bem vindo <?php print $_SESSION["nome"]; ?>!</strong></h1>
		  <!--<h1><strong>Parceiro: <?//php print $_SESSION["parceiro"]; ?></strong></h1>-->

		<?php
		include"footer.php";
		?>
</body>
</html>