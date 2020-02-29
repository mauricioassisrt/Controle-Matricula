<?php
 include("conecta.php");

            $id= $_POST["id"];
            $sexo = $_POST["sexo"];
            $idade = $_POST["idade"];
            $cor_ou_raca = $_POST["cor_ou_raca"];
            $estado_civil = $_POST["estado_civil"];
            $filhos = $_POST["filhos"];
            $estado_nasc = $_POST["estado_nasc"];
            $moradia = $_POST["moradia"];
            $carro = $_POST["carro"];
            $computador = $_POST["computador"];
            $instru_pai = $_POST["instru_pai"];
            $instru_mae = $_POST["instru_mae"];
            $contri_renda = $_POST["contri_renda"];
            $renda_mensal_fam = $_POST["renda_mensal_fam"];
            $atvd_remu = $_POST["atvd_remu"];
            $pessoas_renda = $_POST["pessoas_renda"];
            $p_sustentadas = $_POST["p_sustentadas"];
            $est_primeiro_grau = $_POST["est_primeiro_grau"];
            $con_ens_fund = $_POST["con_ens_fund"];
            $como_est_ensino = $_POST["como_est_ensino"];
            $turn_medio = $_POST["turn_medio"];
            $ano_conclu = $_POST["ano_conclu"];
            $cursinho = $_POST["cursinho"];
            $concurso = $_POST["concurso"];
            $enem = $_POST["enem"];
            $vest_est_ano = $_POST["vest_est_ano"];
            $curs_superior = $_POST["curs_superior"];
            $motivo = $_POST["motivo"];
            $expectativa = $_POST["expectativa"];
            $ocupacao = $_POST["ocupacao"];
            $info = $_POST["info"];
            $cidade = $_POST["cidade"];
            $con_ens_medio = $_POST["con_ens_medio"];
            
            $sql = "INSERT INTO questionario (sexo, idade, cor_ou_raca, estado_civil, filhos, estado_nasc, cidade_atual, moradia,
             carro, computador, instru_pai, instru_mae, contri_renda, renda_mensal_fam, atvd_remu, pessoas_renda, p_sustentadas, 
             est_primeiro_grau, con_ens_fund, como_est_ensino, con_ens_medio, turn_medio, ano_conclu, cursinho, concurso, enem,
              vest_est_ano, curs_superior, motivo, expectativa, ocupacao, info, aca_id)
               VALUES ('$sexo', '$idade', '$cor_ou_raca','$estado_civil','$filhos','$estado_nasc','$cidade','$moradia','$carro',
                '$computador','$instru_pai','$instru_mae','$contri_renda','$renda_mensal_fam','$atvd_remu','$pessoas_renda','$p_sustentadas',
                '$est_primeiro_grau','$con_ens_fund','$como_est_ensino','$con_ens_medio','$turn_medio','$ano_conclu','$cursinho','$concurso','$enem',
                '$vest_est_ano','$curs_superior','$motivo','$expectativa','$ocupacao','$info', '$id')";
           if(mysqli_query($link, $sql)){
                echo "OK";
           }else { echo "Error updating:" . mysqli_error($link);}// executamos a query e armazenamos em uma variavel
        ?>