<?php
		include "conecta.php";

		$checked = $_POST['sel'];
		date_default_timezone_set('America/Sao_Paulo');
		$convocacao = date('Y-m-d H:i');

for($i=0; $i < count($checked); $i++){
	
	echo $checked[$i];
	$aca_id = $checked[$i];
	$queri="insert into conf_matricula (conf_compareceu,conf_status,aca_id) values ('$convocacao','S','".$checked[$i]."')";
	$resultado = mysqli_query($link,$queri) or die (mysqli_error($link));
			
	};


             $msg="<div class='ls-alert-success'><strong>Atenção:</strong>Salvo com sucesso!!! </div>";
            //echo "<div class='ls-alert-success'><strong>Atenção:</strong>Usuário alterado com sucesso!!! </div>";
               header("location:principal.php?msg=$msg");