<?php
include "conecta.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISMAT</title>
<style type="text/css">
			.carregando{
				color:#666;
				display:none;
			}
		</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
<?php

if ((isset($_GET["submit"])<>"Buscar") and (isset($_GET["submit"])<>"search")){ ?>
      <div class="modal-dialog">
          <div class="modal-body">
            <form method="get">
            <div class="form-group">
                <label for="cod_estados">Campus:</label>
                <select class="form-control" name="cod_estados" id="cod_estados">
                    <option value=""></option>
                    <?php
                        $sql = "SELECT cam_id, cam_nome
                                FROM campi
                                ORDER BY cam_nome";
                        $res = mysqli_query($link, $sql);
                        while ( $row = mysqli_fetch_array( $res ) ) {
                            echo '<option value="'.$row['cam_id'].'">'.$row['cam_nome'].'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="cod_cidades">Curso:</label>
                <span class="carregando">Aguarde, carregando...</span>
                <select class="form-control" name="cod_cidades" id="cod_cidades">
                    <option value="">-- Escolha um Curso --</option>
                </select>
            </div>
             <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Buscar"/>
            </div>
            </form>
          </div>
      </div>
	<?php
}

if(isset($_GET['submit']) == "Buscar"){
		   $campus = $_GET["cod_estados"];
		   $curso = $_GET["cod_cidades"];
		   
		if ($campus<>"" and $curso<>""){
		$resultado = mysqli_query($link,"select a.aca_id,a.aca_nome, a.aca_pontuacao, a.aca_classificacao,a.cur_id,ch.cha_convocacao
              from chamada ch RIGHT JOIN academicos a ON ch.aca_id = a.aca_id
              iNNER JOIN curso c ON c.cur_id = a.cur_id 
              INNER JOIN  usuario u ON c.cam_id=u.cam_id
              AND c.cur_id = $curso and c.cam_id = $campus order by a.aca_classificacao");
		} else {
			echo "Você tem que escolher as duas opções Campus e Curso";
			echo "<a href='javascript:history.back()' id='dark'>";
		}

		?>
         <form name="form1" method="post" action="salva-chamada.php">
			<?php

            echo "<div class='modal-dialog' align='center'><table class='table table-striped table-hover' align='center' border='0'><tr>";
            echo "<td><strong> ...</strong><td><strong>ID</strong></td></td><td><strong>Nome</strong></td><td><strong>Pontuação</strong></td><td><strong>Classificação</strong></td><td><strong>Convocação</strong></td></tr>";

                //$busca= mysql_query("SELECT * from inscrito_sisu order by id_inscrito_sisu");
                //$resultado3=mysql_fetch_array($busca3);
                //$pnome=$resultado3['pesNome'];
                while($row = mysqli_fetch_array($resultado))
                {
                    
                    $nome=$row['aca_nome'];
					$pontuacao=$row['aca_pontuacao'];
					$classificação=$row['aca_classificacao'];
					$convocacao=$row['cha_convocacao'];
					$id_aca =$row['aca_id'];

					?>
					<tr> <td> <input type="checkbox" name="sel[]" id="sel[]" value="<?php echo $id_aca ?>" /></td>
                    <?php

			  		//mostra os dados na cor preto normal mas com a condição de $matriculado === S então ele mostra o nome na cor verde caso contrario ele mostra na cor vermelho, atenção ao ternario "?".
				echo "<td>$id_aca</td><td>$nome</strong></td><td>$pontuacao</td><td>$classificação</strong></td><td>$convocacao</strong></td></tr>";

                }//fecha while

                echo "</table></div>";
            ?>
            <div class="modal-dialog">
				<tr> <td><input class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar" /></td></tr>
                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="history.go(-1)">Voltar</button>
                </div>

    	</form>
<!--</table>-->
<?php
}
?>

<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

		<script type="text/javascript">
		  google.load('jquery', '1.3');
		</script>

		<script charset="utf-8" type="text/javascript">
		$(function(){
			$('#cod_estados').change(function(){
				if( $(this).val() ) {
					$('#cod_cidades').hide();
					$('.carregando').show();
					$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value=""></option>';
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + ' - ' + j[i].turno + ' - ' + j[i].grau +'</option>';
						}	
						$('#cod_cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
				}
			});
		});
		</script>
</body>
</html>