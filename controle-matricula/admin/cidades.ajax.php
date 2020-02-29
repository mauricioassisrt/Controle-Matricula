<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );
	// Conecta-se com o MySQL
	//mysql_connect("200.201.19.20", "root", "Aiekr&3847$292834U3838");
	include "conecta.php";
	// Seleciona banco de dados
	//mysql_select_db("2015_matriculas_sisu") or die("erro na query, se o erro persistir entre em contato com o responsavel");
	//$con = mysql_connect( 'localhost', 'root', 'root' ) ;
	//mysql_select_db( 'cadastro', $con );
	//mysql_set_charset('utf8');

	$cod_estados = mysqli_real_escape_string($link, $_REQUEST['cod_estados'] );
	$cidades = array();

	$sql = "SELECT cur_id, cur_nome, cur_turno, cur_tipo
			FROM curso
			WHERE cam_id=$cod_estados
			ORDER BY cur_nome";
	$res = mysqli_query($link, $sql);
	while ($row = mysqli_fetch_assoc( $res ) ) {
		$cidades[] = array(
			'cod_cidades'	=> $row['cur_id'],
			'nome'			=> $row['cur_nome'],
			'turno'			=> $row['cur_turno'],
			'grau'			=> $row['cur_tipo'],
		);
	}

	echo( json_encode( $cidades ) );