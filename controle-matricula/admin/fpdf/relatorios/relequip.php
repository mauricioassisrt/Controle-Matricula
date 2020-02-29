<?
	
include('../conecta.php');
	
// inclui a class pdf
require('../fpdf/fpdf.php'); 

// define uma classe p criar rodape
	class PDF extends FPDF 
	{
		function Header()//cria o cabelho
		{
			// define fonte
			$this->SetFont('Arial','B',18);
			// definindo celula do titulo
			$this->Cell(265,7, 'SAMEO', 0, 1, 'C');
			
			// define fonte
			$this->SetFont('Arial','B',10);
			
			// definindo celula do titulo
			$this->Cell(265,6, 'Sistema de Acompanhamento de Manutencao de Equipamentos Online', 'B', 1, 'C');
			
			//define altura
			$this->SetY(27);

			// define fonte
			$this->SetFont('Arial','B',12);
			
			// definindo celula do tiulo
			$this->Cell(265, 8, 'RELATÓRIO', 0, 1, 'C');
			
			// definindo celula do tiulo
			$this->Cell(265, 8, 'Equipamentos Cadastrados', 0, 1, 'C');
			
			// define fonte
			$this->SetFont('Arial','B',10);
		
			// variaveis com tamanho das celulas do cabecalho da tabela
			$cel1=90;
			$cel2=36;
			$cel3=40;
			$cel4=40;
			$cel5=60;
			
			
			
			// definindo celula do tiulo
			$this->Cell($cel1, 6, 'Nome', 1, 0, 'C');
			
			// definindo celula do tiulo
			$this->Cell($cel2, 6, 'Fone/Ramal', 1, 0, 'C');
			
			// definindo celula do tiulo
			$this->Cell($cel3, 6, 'Secretaria', 1, 0, 'C');
			
			// definindo celula do tiulo
			$this->Cell($cel4, 6, 'Setor', 1, 0, 'C');
			
			// definindo celula do tiulo
			$this->Cell($cel5, 6, 'Login', 1, 0, 'C');
			
			
			$this->Ln();
		}
		
		function Footer() // funcao do rodape
		{
			$this->SetY(-14); // define a posicao
			$this->SetFont('Arial','I',8);
			$this->Cell(90,4, 'Data: ' . date('d/m/Y') . ' - Hora: ' . date('H:i'), 0, 0, 'L'); // imprime data e hora
			$this->Cell(180,4, 'Página '.$this->PageNo().'/{total}', 0, 0, 'R');//imprime numero da pagina
		}
	}
	
	// cria objeto PDF
	$pdf = new PDF();

	$pdf->AliasNbPages('{total}'); //conta as paginas

	// definindo margens
	$pdf->SetMargins(15, 10);

	// adicionando uma página
	$pdf->AddPage('L');
	

	// define fonte
	$pdf->SetFont('Arial','',9);
	
	$cons_cat = mysql_query("SELECT funcionario.*, secretarias.nome_secretaria, setor.setor_funcionario from funcionario inner join secretarias on
							(secretarias.id_secretaria=funcionario.id_secretaria) inner join setor on
							(setor.id_setor=funcionario.id_setor)") or die (mysql_error());
	
	
	
	while($resp_cat = mysql_fetch_array($cons_cat))
	{
		
		// variaveis com tamanho das celulas do corpo da tabela
			$cel1=90;
			$cel2=36;
			$cel3=40;
			$cel4=40;
			$cel5=60;
			
		// definindo celula do tiulo
		$pdf->Cell($cel1, 5, $resp_cat['nome_funcionario'], 1, 0, 'C');
		
		// definindo celula do tiulo
		$pdf->Cell($cel2, 5, $resp_cat['ramal_funcionario'], 1, 0, 'C');
		
		// definindo celula do tiulo
		$pdf->Cell($cel3, 5, $resp_cat['nome_secretaria'], 1, 0, 'C');
		
		// definindo celula do tiulo
		$pdf->Cell($cel4, 5, $resp_cat['setor_funcionario'], 1, 0, 'C');
		
		// definindo celula do tiulo
		$pdf->Cell($cel5, 5, $resp_cat['login_funcionario'], 1, 0, 'C');
		
		$pdf->Ln();
		
		
}	

	// exibindo arquivo PDF
	$pdf->Output(); 
?>
