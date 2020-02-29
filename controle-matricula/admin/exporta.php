<?php
		include "conecta.php";

function convert_to_csv($input_array, $output_file_name, $delimiter)
{
    /** open raw memory as file, no need for temp files */
    $temp_memory = fopen('php://memory', 'w');
    /** loop through array  */
    foreach ($input_array as $line) {
        /** default php csv handler **/
        fputcsv($temp_memory, $line, $delimiter);
    }
    /** rewrind the "file" with the csv lines **/
    fseek($temp_memory, 0);
    /** modify header to be downloadable csv file **/
    header('Content-Type: application/octet-stream; charset=UTF-8');
	header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
    header('Content-Disposition: attachement; filename="' . $output_file_name . '";');
    /** Send file to browser for download */
    fpassthru($temp_memory);
}

//recebendo dados via post
$checked = $_POST['sel'];

for($i=0; $i < count($checked); $i++){
	
$resultado = mysqli_query($link, "select i.id_inscrito_sisu, i.nome, i.data_nascimento, d.sexo, d.nacionalidade, d.estado_civil, d.raca, d.tipo_nacionalidade, d.pais_origem, d.uf_naturalidade, 
d.cidade_naturalidade, d.tipo_certidao, d.data_emissao_certidao, d.uf_cartorio, d.nome_cartorio, 
d.numero_certidao, d.folha_certidao, d.livro_certidao, d.rg,d.data_expedicao_rg, d.uf_rg, d.titulo_eleitor, d.zona, d.secao, d.cpf, d.reservista, d.orgao_emissor_reservista, 
d.orgao_emissor_rg, d.nome_mae, d.rg_mae, d.uf_emissao_rg_mae, d.escolaridade_mae, d.nome_pai, 
d.uf_emissao_rg_pai, d.rg_pai, d.endereco, d.numero_endereco, d.complemento, d.bairro, d.cep, d.uf_endereco, d.cidade_endereco, d.zona_residencial, d.tipo_moradia, 
d.telefone_residencial, d.telefone_comercial, d.telefone_celular, d.email, d.necessidade, d.renda, 
d.nome_escola, d.cidade_escola, d.ano_conclusao, d.tipo_escola, c.descricao, r.curso_descricao, r.turno, r.grau, i.pontuacao, i.classificacao
from dados_sisu d, inscrito_sisu i, campi c, curso r
where d.inscrito_sisu =i.id_inscrito_sisu
and i.curso_id=r.id
and r.campus_id=c.id
and i.id_inscrito_sisu = '$checked[$i]'");

	$row = mysqli_fetch_array($resultado);

		$id_inscrito_sisu=$row['id_inscrito_sisu'];
		$nome=$row['nome'];
		$data_nascimento=$row['data_nascimento'];
		$sexo=$row['sexo'];
		$nacionalidade=$row['nacionalidade'];
		$estado_civil=$row['estado_civil'];
		$raca=$row['raca'];
		$tipo_nacionalidade=$row['tipo_nacionalidade'];
		$pais_origem=$row['pais_origem'];
		$uf_naturalidade=$row['uf_naturalidade'];
		$cidade_naturalidade=$row['cidade_naturalidade'];
		$tipo_certidao=$row['tipo_certidao'];
		$data_emissao_certidao=$row['data_emissao_certidao'];
		$uf_cartorio=$row['uf_cartorio'];
		$numero_certidao=$row['numero_certidao'];
		$folha_certidao=$row['folha_certidao'];
		$livro_certidao=$row['livro_certidao'];
		$rg=$row['rg'];
		$data_expedicao=$row['data_expedicao'];
		$uf_rg=$row['uf_rg'];
		$titulo_eleitor=$row['titulo_eleitor'];
		$zona=$row['zona'];
		$secao=$row['secao'];
		$cpf=$row['cpf'];
		$reservista=$row['reservista'];
		$orgao_emissor_reservista=$row['orgao_emissor_reservista'];
		$nome_cartorio=$row['nome_cartorio'];
		$orgao_emissor=$row['orgao_emissor'];
		$nome_mae=$row['nome_mae'];
		$rg_mae=$row['rg_mae'];
		$uf_emissao_rg_mae=$row['uf_emissao_rg_mae'];
		$escolaridade_mae=$row['escolaridade_mae'];
		$nome_pai=$row['nome_pai'];
		$uf_emissao_rg_pai=$row['uf_emissao_rg_pai'];
		$rg_pai=$row['rg_pai'];
		$endereco=$row['endereco'];
		$numero_endereco=$row['numero_endereco'];
		$complemento=$row['complemento'];
		$bairro=$row['bairro'];
		$cep=$row['cep'];
		$uf_endereco=$row['uf_endereco'];
		$cidade_endereco=$row['cidade_endereco'];
		$zona_residencial=$row['zona_residencial'];
		$tipo_moradia=$row['tipo_moradia'];
		$telefone_residencial=$row['telefone_residencial'];
		$telefone_comercial=$row['telefone_comercial'];
		$telefone_celular=$row['telefone_celular'];
		$email=$row['email'];
		$necessidade=$row['necessidade'];
		$renda=$row['renda'];
		$nome_escola=$row['nome_escola'];
		$cidade_escola=$row['cidade_escola'];
		$ano_conclusao=$row['ano_conclusao'];
		$tipo_escola=$row['tipo_escola'];
		$descricao=$row['descricao'];
		$curso_descricao=$row['curso_descricao'];
		//$turno=$row['turno'];
		//$grau=$row['grau'];
		
		//echo $nome;

	
	$array_to_csv = array($id_inscrito_sisu,$nome,$data_nascimento,$sexo,$nacionalidade,$estado_civil,$raca,$tipo_nacionalidade,$pais_origem,$uf_naturalidade,$cidade_naturalidade,$tipo_certidao,$data_emissao_certidao,$uf_cartorio,$numero_certidao,$folha_certidao,$livro_certidao,$rg,$data_expedicao,$uf_rg,$titulo_eleitor,$zona,$secao,$cpf,$reservista,$orgao_emissor_reservista,$nome_cartorio,$orgao_emissor,$nome_mae,$rg_mae,$uf_emissao_rg_mae,$escolaridade_mae,$nome_pai,$uf_emissao_rg_pai,$rg_pai,$endereco,$numero_endereco,$complemento,$bairro,$cep,$uf_endereco,$cidade_endereco,$zona_residencial,$telefone_residencial,$telefone_comercial,$telefone_celular,$email,$necessidade,$renda,$nome_escola,$cidade_escola,$ano_conclusao,$tipo_escola,$descricao,$curso_descricao
	);
	
	$teste[$i]= $array_to_csv;
//print_r ($resultado);	
//print_r($array_to_csv);
//echo "<br>";
	//$carry="UPDATE inscrito_sisu set matriculado='S' WHERE id_inscrito_sisu ='$checked[$i]'";
	//$query_noticias=mysql_query($carry) or die ("Erro - na inclusão: $carry");
	//echo "Alterações realizadas com sucesso!!!";		
    //echo "Selected: " . $checked[$i] . "<br/>";
}//fim do for

//print_r($teste);
convert_to_csv($teste, 'relatorio.csv', ';');

//echo "Alterações realizadas com sucesso!!!";
//$interests_str = implode(" ", $_POST['sel']);// converts $_POST interests into a string
//    $interests_array = explode(" ", $interests_str);// converts the string to an array which you can easily manipulate
//	print_r($interests_array);

?>