<!DOCTYPE html>
<html class="ls-theme-green">
    <head>
        <title>Página com a estrutura inicial</title>


        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="Insira aqui a descrição da página.">
        <link href="http://assets.locaweb.com.br/locastyle/3.8.2/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);
            }
        </script>
    </head>
    <body>
        <?php
        $nome = $_GET['nome'];
        $id = $_GET['id'];
        
        
        include("conecta.php");

        if (isset($_POST["Enviar"])) {

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

            $link;

            $sql = "INSERT INTO questionario (sexo, idade, cor_ou_raca, estado_civil, filhos, estado_nasc, cidade_atual, moradia, carro, computador, instru_pai, instru_mae, contri_renda, renda_mensal_fam, atvd_remu, pessoas_renda, p_sustentadas, est_primeiro_grau, con_ens_fund, como_est_ensino, con_ens_medio, turn_medio, ano_conclu, cursinho, concurso, enem, vest_est_ano, curs_superior, motivo, expectativa, ocupacao, info) VALUES ('$sexo', '$idade', '$cor_ou_raca','$estado_civil','$filhos','$estado_nasc','$cidade','$moradia','$carro','$computador','$instru_pai','$instru_mae','$contri_renda','$renda_mensal_fam','$atvd_remu','$pessoas_renda','$p_sustentadas','$est_primeiro_grau','$con_ens_fund','$como_est_ensino','$con_ens_medio','$turn_medio','$ano_conclu','$cursinho','$concurso','$enem','$vest_est_ano','$curs_superior','$motivo','$expectativa','$ocupacao','$info')";
            $query = mysqli_query($link, $sql); // executamos a query e armazenamos em uma variavel
        }
        ?>


        <div class="ls-topbar ">

            <!-- Barra de Notificações -->
            <div class="ls-notification-topbar">

                <!-- Links de apoio -->
                <div class="ls-alerts-list">
                    <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
                    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
                    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
                </div>

                <!-- Dropdown com detalhes da conta de usuário -->
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
                        <span class="ls-name">João Kennedy</span>
                        (johnkennedy)
                    </a>

                    <nav class="ls-dropdown-nav ls-user-menu">
                        <ul>
                            <li><a href="#">Meus dados</a></li>
                            <li><a href="#">Faturas</a></li>
                            <li><a href="#">Planos</a></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <span class="ls-show-sidebar ls-ico-menu"></span>

            <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

            <!-- Nome do produto/marca com sidebar -->
            <h1 class="ls-brand-name">
                <a href="home" class="ls-ico-earth">
                    <small>Uma descrição ou outro nome</small>
                    O nome do Produto
                </a>
            </h1>

            <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
        </div>


        <aside class="ls-sidebar">

            <div class="ls-sidebar-inner">
                <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

                <nav class="ls-menu">
                    <ul>
                        <li><a href="cpf.php" class="ls-ico-dashboard" title="CPF">CPF</a></li>
                        <li><a href="alunos.php" class="ls-ico-users" title="Clientes">Alunos</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/stats" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
                            <ul>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Domínios da Revenda</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Aparência</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer">Atendimento</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api">Chave de acesso para API</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>


            </div>
        </aside>







        <main class="ls-main ">
            <div class="container-fluid">
                <h1 class="ls-title-intro ls-ico-home">QUESTINÁRIO-SÓCIO-ECONÔMICO-EDUCACIONAL</h1>

                <button data-ls-module="modal" data-target="#myAwesomeModal" class="ls-btn-primary">Questinario</button>
                <?php
                $login_cookie = $_COOKIE['cpf'];
                if (isset($login_cookie)) {
                    echo"Bem-Vindo, $nome <br>";
                    echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
                } else {
                    echo"Bem-Vindo, convidado <br>";
                    echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                    echo"<br><a href='index.php'>Faça o acesso com seu CPF </a> Para ler o conteúdo";
                }
                ?>

            
               


                <div class="ls-modal" id="myAwesomeModal">
                    <div class="ls-modal-box">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Modal title</h4>
                        </div>
                        <form name="form"  method="post">
                            <div class="ls-modal-body" id="myModalBody">


                                <h4 style="font-size: 20px">1 SEXO:</h4>
                                <br/>
                                <input type="radio" name="sexo" value="Masculino" />
                                Masculino
                                <br />
                                <input type="radio" name="sexo" value="Feminino" />
                                Feminino
                                <br/><br/>

                                <h4 style="font-size: 20px">2 QUAL A SUA IDADE?</h4>
                                <br/>
                                <input type="radio" name="idade" value="MENOS DE 16 ANOS" required="true"/>
                                MENOS DE 16 ANOS<br/>
                                <input type="radio" name="idade" value="DE 16 A 18 ANOS" />
                                DE 16 A 18 ANOS<br/>
                                <input type="radio" name="idade" value=" DE 19 A 21 ANOS" />
                                DE 19 A 21 ANOS<br/>
                                <input type="radio" name="idade" value=" DE 22 A 25 ANOS" />
                                DE 22 A 25 ANOS<br/>
                                <input type="radio" name="idade" value="DE 26 A 30 ANOS" />
                                DE 26 A 30 ANOS<br/>
                                <input type="radio" name="idade" value="MAIS DE 31 ANOS" />
                                MAIS DE 31 ANOS<br/>  <br/>


                                <H4 style="font-size: 20px">3 ASSINALE A ALTERNATIVA QUE IDENTIFICA A SUA COR OU RAÇA:</H4>
                                <br/>
                                <input type="radio" name="cor_ou_raca" value="BRANCA" required="true"/>
                                BRANCA       <br/>
                                <input type="radio" name="cor_ou_raca" value="PRETA" />
                                PRETA<br/>
                                <input type="radio" name="cor_ou_raca" value="PARDA" />
                                PARDA<br/>
                                <input type="radio" name="cor_ou_raca" value="AMARELA" />
                                AMARELA<br/>
                                <input type="radio" name="cor_ou_raca" value="INDÍGENA" />
                                INDÍGENA<br/><br/>




                                <h4 style="font-size: 20px">4 QUAL O SEU ESTADO CIVIL?</h4>
                                <br/>
                                <input type="radio" name="estado_civil" value="SOLTEIRO(A)" required="true"/>
                                SOLTEIRO(A)<br/>
                                <input type="radio" name="estado_civil" value="CASADO (A)" />
                                CASADO (A)<br/>
                                <input type="radio" name="estado_civil" value="VIÃšVO (A)" />
                                VIÚVO (A)<br/>
                                <input type="radio" name="estado_civil" value=" SEPARAÃ‡ÃƒO LEGAL (JUDICIAL OU DIVÃ“RCIO)" />
                                SEPARAÇÃO LEGAL (JUDICIAL OU DIVÓRCIO)<br/>
                                <input type="radio" name="estado_civil" value="OUTRO" />
                                OUTRO
                                <br/><br/>


                                <h4 style="font-size: 20px">5 CASO POSSUA FILHOS MENORES DE 6 ANOS, QUANTO SÃO?</h4>
                                <br/>
                                <input type="radio" name="filhos" value="NÃO POSSUO FILHOS" required="true"/>NÃO POSSUO FILHOS
                                <br/>
                                <input type="radio" name="filhos" value="UM" />
                                UM
                                <br/>
                                <input type="radio" name="filhos" value="DOIS" />DOIS
                                <br/>
                                <input type="radio" name="filhos" value="TRÊS" />
                                TRÊS
                                <br/>
                                <input type="radio" name="filhos" value="QUATRO" />
                                QUATRO
                                <br/>
                                <input type="radio" name="filhos" value="NÃO POSSUO FILHOS MENORES DE SEIS ANOS" />
                                NÃO POSSUO FILHOS MENORES DE SEIS ANOS
                                <br/><br/>


                                <h4 style="font-size: 20px">6 QUAL O ESTADO EM QUE NASCEU?</h4>
                                <br/>
                                <input type="radio" name="estado_nasc" value="PARANÁ" required="true"/>
                                PARANÁ
                                <br/>
                                <input type="radio" name="estado_nasc" value="SANTA CATARINA" />
                                SANTA CATARINA
                                <br/>
                                <input type="radio" name="estado_nasc" value="SÃO PAULO" />
                                SÃO PAULO
                                <br/>
                                <input type="radio" name="estado_nasc" value="MATO GROSSO DO SUL" />
                                MATO GROSSO DO SUL
                                <br/>
                                <input type="radio" name="estado_nasc" value="OUTRO" />
                                OUTRO
                                <br/>  <br/>


                                <h4 style="font-size: 20px">7 EM QUE CIDADE MORA?</h4>
                                <br/>
                                <select id="estado" name="estado" required="true"></select>

                                <select id="cidade" name="cidade" required="true"></select><br/><br/><br/>


                                <h4 style="font-size: 20px">8 EM RELAÇÃO À MORADIA:</h4>
                                <br/>
                                <input type="radio" name="moradia" value="MORA EM CASA PRÓPRIA" required="true"/>
                                MORA EM CASA PRÓPRIA
                                <br/>
                                <input type="radio" name="moradia" value="NÃO TEM CASA PRÓPRIA" />
                                NÃO TEM CASA PRÓPRIA
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">9 QUANTOS CARROS EXISTEM EM SUA RESIDÊNCIA?</h4>
                                <br/>
                                <input type="radio" name="carro" value="NENHUM" required="true"/>
                                NENHUM
                                <br/>
                                <input type="radio" name="carro" value="UM" />
                                UM
                                <br/>
                                <input type="radio" name="carro" value="DOIS" />DOIS
                                <br/>
                                <input type="radio" name="carro" value="TRÊS" />
                                TRÊS
                                <br/>
                                <input type="radio" name="carro" value="QUATRO OU MAIS" />
                                QUATRO OU MAIS
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">10 POSSUI COMPUTADOR EM SUA CASA?</h4>
                                <br/>
                                <input type="radio" name="computador" value="NÃO POSSUO COMPUTADOR" required="true"/>
                                NÃO POSSUO COMPUTADOR
                                <br/>
                                <input type="radio" name="computador" value="POSSUO APENAS UM SEM ACESSO À INTERNET" />
                                POSSUO APENAS UM SEM ACESSO À INTERNET
                                <br/>
                                <input type="radio" name="computador" value=" POSSUO APENAS UM COM ACESSO À INTERNET" />
                                POSSUO APENAS UM COM ACESSO À INTERNET
                                <br/>
                                <input type="radio" name="computador" value="POSSUO MAIS DE UM SEM ACESSO À INTERNET" />
                                POSSUO MAIS DE UM SEM ACESSO À INTERNET
                                <br/>
                                <input type="radio" name="computador" value="POSSUO MAIS DE UM COM ACESSO À INTERNET" />
                                POSSUO MAIS DE UM COM ACESSO À INTERNET
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">11 QUAL O NÍVEL DE INSTRUÇÃOO DE SEU PAI?</h4>
                                <br/>
                                <input type="radio" name="instru_pai" value=" SEM ESCOLARIDADE" required="true"/>
                                SEM ESCOLARIDADE
                                <br/>
                                <input type="radio" name="instru_pai" value=" ENSINO FUNDAMENTAL (1º GRAU) INCOMPLETO" />
                                ENSINO FUNDAMENTAL (1º GRAU) INCOMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value="ENSINO FUNDAMENTAL (1º GRAU) COMPLETO" />
                                ENSINO FUNDAMENTAL (1º GRAU) COMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value=" ENSINO MÃ‰DIO (2º GRAU) INCOMPLETO" />
                                ENSINO FUNDAMENTAL (1º GRAU) COMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value=" ENSINO MÃ‰DIO (2º GRAU) COMPLETO" />
                                ENSINO MÉDIO (2º GRAU) COMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value="SUPERIOR INCOMPLETO" />
                                SUPERIOR INCOMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value="SUPERIOR COMPLETO" />
                                SUPERIOR COMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value="MESTRADO OU DOUTORADO" />
                                SUPERIOR COMPLETO
                                <br/>
                                <input type="radio" name="instru_pai" value="NÃO SEI INFORMAR" />
                                NÃO SEI INFORMAR
                                <br/><br/>


                                <h4 style="font-size: 20px">12 QUAL O NÍVEL DE INSTRUÇÃO DE SUA MÃE?<br/></h4><br/>


                                <input type="radio" name="instru_mae" value=" SEM ESCOLARIDADE" required="true"/>
                                SEM ESCOLARIDADE
                                <br/>
                                <input type="radio" name="instru_mae" value="ENSINO FUNDAMENTAL (1º GRAU) INCOMPLETO" />
                                ENSINO FUNDAMENTAL (1º GRAU) INCOMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value=" ENSINO FUNDAMENTAL (1º GRAU) COMPLETO" />
                                ENSINO FUNDAMENTAL (1º GRAU) COMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value="ENSINO MÉDIO (2º GRAU) INCOMPLETO" />
                                ENSINO MÉDIO (2º GRAU) INCOMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value="ENSINO MÉDIO (2º GRAU) COMPLETO" />
                                ENSINO MÉDIO (2º GRAU) COMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value="SUPERIOR INCOMPLETO" />
                                SUPERIOR INCOMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value=" SUPERIOR COMPLETO" />
                                SUPERIOR COMPLETO
                                <br/>
                                <input type="radio" name="instru_mae" value="MESTRADO OU DOUTORADO" />
                                MESTRADO OU DOUTORADO
                                <br/>
                                <input type="radio" name="instru_mae" value="NÃO SEI INFORMAR" />
                                NÃO SEI INFORMAR
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">13 VOCÊ CONTRIBUI NA RENDA FAMILIAR?</h4>
                                <br/>

                                <input type="radio" name="contri_renda" value=" SIM" required="true"/>
                                SIM
                                <br/>
                                <input type="radio" name="contri_renda" value=" NÃO" />
                                NÃO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">14 ASSINALE A RENDA FAMILIAR MENSAL DE SUA CASA:</h4><br/>

                                <input type="radio" name="renda_mensal_fam" value="ATÉ R$ 865,50 (ATÉ UM SALÁRIO MÍNIMO" required="true"/>
                                ATÉ R$ 865,50 (ATÉ UM SALÁRIO MÍNIMO)
                                <br/>
                                <input type="radio" name="renda_mensal_fam" value=" DE R$ 865,51 A R$ 1731,00 ( DE UM A DOIS)" />
                                DE R$ 865,51 A R$ 1731,00 ( DE UM A DOIS)
                                <br/>
                                <input type="radio" name="renda_mensal_fam" value="DE R$ 1.731,01 A R$ 3.462,00 (DE DOIS A QUATRO)" />
                                DE R$ 1.731,01 A R$ 3.462,00 (DE DOIS A QUATRO)
                                <br/>
                                <input type="radio" name="renda_mensal_fam" value="DE R$ 3.462,01 A R$ 6.924,00 ( DE QUATRO A OITO)" />
                                DE R$ 3.462,01 A R$ 6.924,00 ( DE QUATRO A OITO)
                                <br/>
                                <input type="radio" name="renda_mensal_fam" value="DE R$ 6.924,01 A R$ 8.655,00 (DE OITO A DEZ)" />
                                DE R$ 6.924,01 A R$ 8.655,00 (DE OITO A DEZ)
                                <br/>
                                <input type="radio" name="renda_mensal_fam" value="  MAIS DE R$ 8.655,01 (MAIS DE DEZ)" />
                                MAIS DE R$ 8.655,01 (MAIS DE DEZ)
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">15 COM RELAÇÃO A SUA ATIVIDADE REMUNERADA MENSAL:</h4>
                                <br/>

                                <input type="radio" name="atvd_remu" value=" NÃO POSSUO ATIVIDADE REMUNERADA MENSAL" required="true"/>
                                NÃO POSSUO ATIVIDADE REMUNERADA MENSAL
                                <br/>
                                <input type="radio" name="atvd_remu" value=" RECEBO ATÉ 865,50 (ATÉ UM SALÁRIO MÍNIMO)" />
                                RECEBO ATÉ R$ 865,50 (ATÉ UM SALÁRIO MÍNIMO)
                                <br/>
                                <input type="radio" name="atvd_remu" value=" RECEBO DE R$ 865,51 A R$ 1731,00 ( DE UM A DOIS)" />
                                RECEBO DE R$ 865,51 A R$ 1731,00 ( DE UM A DOIS)
                                <br/>
                                <input type="radio" name="atvd_remu" value=" RECEBO DE R$ 1.731,01 A R$ 3.462,00 (DE DOIS A QUATRO)" />
                                RECEBO DE R$ 1.731,01 A R$ 3.462,00 (DE DOIS A QUATRO)
                                <br/>
                                <input type="radio" name="atvd_remu" value="RECEBO DE R$ 3.462,01 A R$ 6.924,00 ( DE QUATRO A OITO)" />
                                RECEBO DE R$ 3.462,01 A R$ 6.924,00 ( DE QUATRO A OITO)
                                <br/>
                                <input type="radio" name="atvd_remu" value=" RECEBO DE R$ 6.924,01 A R$ 8.655,00 (DE OITO A DEZ)" />
                                RECEBO DE R$ 6.924,01 A R$ 8.655,00 (DE OITO A DEZ)
                                <br/>
                                <input type="radio" name="atvd_remu" value="RECEBO MAIS DE R$ 8.655,01 (MAIS DE DEZ)" required="true"/>
                                RECEBO MAIS DE R$ 8.655,01 (MAIS DE DEZ)
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">16 QUANTAS PESSOAS CONTRIBUEM PARA A OBTENÇÃO DESSA RENDA FAMILIAR?</h4><br/>

                                <input type="radio" name="pessoas_renda" value="UMA" required="true"/>
                                UMA
                                <br/>
                                <input type="radio" name="pessoas_renda" value="DUAS" />
                                DUAS
                                <br/>
                                <input type="radio" name="pessoas_renda" value="TRÊS" />
                                TRÊS
                                <br/>
                                <input type="radio" name="pessoas_renda" value="QUATRO" />
                                QUATRO
                                <br/>
                                <input type="radio" name="pessoas_renda" value="CINCO" />
                                CINCO
                                <br/>
                                <input type="radio" name="pessoas_renda" value="MAIS DE CINCO" />
                                MAIS DE CINCO
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">17 QUANTAS PESSOAS SÃO SUSTENTADAS COM A RENDA FAMILIAR?<br/></h4>
                                <br/>
                                <input type="radio" name="p_sustentadas" value="UMA" required="true"/>
                                UMA
                                <br/>
                                <input type="radio" name="p_sustentadas" value="DUAS" />
                                DUAS
                                <br/>
                                <input type="radio" name="p_sustentadas" value="TRÊS" />
                                TRÊS
                                <br/>
                                <input type="radio" name="p_sustentadas" value="QUATRO" />
                                QUATRO
                                <br/>
                                <input type="radio" name="p_sustentadas" value="CINCO" />
                                CINCO
                                <br/>
                                <input type="radio" name="p_sustentadas" value=" MAIS DE CINCO" />
                                MAIS DE CINCO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">18 COMO FEZ SEUS ESTUDOS DE ENSINO FUNDAMENTAL (1º GRAU)?<br/></h4>
                                <br/>
                                <input type="radio" name="est_primeiro_grau" value="INTEGRALMENTE EM ESCOLA PÚBLICA" required="true"/>
                                INTEGRALMENTE EM ESCOLA PÚBLICA
                                <br/>
                                <input type="radio" name="est_primeiro_grau" value=" INTEGRALMENTE EM ESCOLA PARTICULAR" />
                                INTEGRALMENTE EM ESCOLA PARTICULAR<br/>
                                <input type="radio" name="est_primeiro_grau" value="MAIOR PARTE EM ESCOLA PÚBLICA" />
                                MAIOR PARTE EM ESCOLA PÚBLICA
                                <br/>
                                <input type="radio" name="est_primeiro_grau" value="MAIOR PARTE EM ESCOLA PARTICULAR" />
                                MAIOR PARTE EM ESCOLA PARTICULAR
                                <br/>
                                <input type="radio" name="est_primeiro_grau" value="EM ESCOLAS COMUNITÁRIAS/CNEC OU OUTRO" />
                                EM ESCOLAS COMUNITÁRIAS/CNEC OU OUTRO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">19 CONCLUIU O ENSINO FUNDAMENTAL (1º GRAU) EM:<br/></h4>


                                <input type="radio" name="con_ens_fund" value="CURSO REGULAR" required="true"/>
                                CURSO REGULAR<br/>
                                <input type="radio" name="con_ens_fund" value="  CURSO SUPLETIVO" />
                                CURSO SUPLETIVO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">20 COMO FEZ SEUS ESTUDOS DE ENSINO MÉDIO (2º GRAU)?<br/></h4>
                                <br/>
                                <input type="radio" name="como_est_ensino" value="INTEGRALMENTE EM ESCOLA PÚBLICA" required="true"/>
                                INTEGRALMENTE EM ESCOLA PÚBLICA
                                <br/>
                                <input type="radio" name="como_est_ensino" value="INTEGRALMENTE EM ESCOLA PARTICULAR" />
                                INTEGRALMENTE EM ESCOLA PARTICULAR
                                <br/>
                                <input type="radio" name="como_est_ensino" value="MAIOR PARTE EM ESCOLA PÚBLICA" />
                                MAIOR PARTE EM ESCOLA PÚBLICA
                                <br/>
                                <input type="radio" name="como_est_ensino" value=" MAIOR PARTE EM ESCOLA PARTICULAR" />
                                MAIOR PARTE EM ESCOLA PARTICULAR
                                <br/>
                                <input type="radio" name="como_est_ensino" value=" EM ESCOLAS COMUNITÁRIAS/CNEC OU OUTRO" />
                                EM ESCOLAS COMUNITÃ?RIAS/CNEC OU OUTRO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">21 CONCLUIU O ENSINO MÉDIO (2º GRAU) EM:<br/></h4>


                                <input type="radio" name="con_ens_medio" value=" CURSO REGULAR" required="true"/>
                                CURSO REGULAR<br/>
                                <input type="radio" name="con_ens_medio" value="CURSO SUPLETIVO " />
                                CURSO SUPLETIVO
                                <br/>   
                                <br/>


                                <h4 style="font-size: 20px">22 EM QUE TURNO VOCÊ FEZ O ENSINO MÉDIO (2º GRAU)?<br/></h4>

                                <input type="radio" name="turn_medio" value="TODO DIURNO" required="true"/>
                                TODO DIURNO
                                <br/>
                                <input type="radio" name="turn_medio" value="TODO NOTURNO" />
                                TODO NOTURNO
                                <br/>
                                <input type="radio" name="turn_medio" value="MAIOR PARTE DIURNO" />
                                MAIOR PARTE DIURNO
                                <br/>
                                <input type="radio" name="turn_medio" value=" MAIOR PARTE NOTURNO" />
                                MAIOR PARTE NOTURNO
                                <br/>
                                <input type="radio" name="turn_medio" value=" OUTRO" />
                                OUTRO
                                <br/><br/>


                                <h4 style="font-size: 20px">23 EM QUE ANO CONCLUIU O ENSINO MÃ‰DIO (2Âº GRAU)?<br/></h4>

                                <input type="radio" name="ano_conclu" value="2015" required="true"/>
                                2015
                                <br/>
                                <input type="radio" name="ano_conclu" value="2014" />
                                2014
                                <br/>
                                <input type="radio" name="ano_conclu" value=" 2013" />
                                2013
                                <br/>
                                <input type="radio" name="ano_conclu" value="2012" />
                                2012
                                <br/>
                                <input type="radio" name="ano_conclu" value=" ENTRE 2011 E 2007" />
                                ENTRE 2011 E 2007
                                <br/>
                                <input type="radio" name="ano_conclu" value="ENTRE 2006 E 2002" />
                                ENTRE 2006 E 2002
                                <br/>
                                <input type="radio" name="ano_conclu" value="ANTES DE 2002" />
                                ANTES DE 2002
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">24 VOCÊ FREQUENTOU CURSINHO PREPARATÓRIO PARA O VESTIBULAR?<br/></h4>
                                <br/>
                                <input type="radio" name="cursinho" value="SIM, POR MENOS DE 1 SEMESTRE" required="true"/>
                                SIM, POR MENOS DE 1 SEMESTRE
                                <br/>
                                <input type="radio" name="cursinho" value="  SIM, POR 1 SEMESTRE" />
                                SIM, POR 1 SEMESTRE
                                <br/>
                                <input type="radio" name="cursinho" value="SIM, POR UM ANO" />
                                SIM, POR UM ANO
                                <br/>
                                <input type="radio" name="cursinho" value="SIM, POR MAIS DE UM ANO" />
                                SIM, POR MAIS DE UM ANO
                                <br/>
                                <input type="radio" name="cursinho" value="NÃO" />
                                NÃO
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">25 QUANTAS VEZES VOCÃŠ JÃ? PRESTOU CONCURSO VESTIBULAR?<br/></h4>
                                <br/>
                                <input type="radio" name="concurso" value="NUNCA" required="true"/>
                                NUNCA
                                <br/>
                                <input type="radio" name="concurso" value="UMA VEZ" />
                                UMA VEZ
                                <br/>
                                <input type="radio" name="concurso" value="DUAS VEZES" />
                                DUAS VEZES
                                <br/>
                                <input type="radio" name="concurso" value=" TRÊS VEZES" />
                                TRÊS VEZES
                                <br/>
                                <input type="radio" name="concurso" value="QUATRO VEZES" />
                                QUATRO VEZES
                                <br/>
                                <input type="radio" name="concurso" value=" CINCO VEZES OU MAIS" />
                                CINCO VEZES OU MAIS
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">26 QUANTAS VEZES VOCÊ JÁ? PRESTOU O ENEM?<br/></h4>
                                <br/>
                                <input type="radio" name="enem" value="NUNCA" required="true"/>
                                NUNCA
                                <br/>
                                <input type="radio" name="enem" value="UMA VEZ" />
                                UMA VEZ
                                <br/>
                                <input type="radio" name="enem" value="DUAS VEZES" />
                                DUAS VEZES
                                <br/>
                                <input type="radio" name="enem" value="TRÊS VEZES" />
                                TRÊS VEZES
                                <br/>
                                <input type="radio" name="enem" value="QUATRO VEZES" />
                                QUATRO VEZES
                                <br/>
                                <input type="radio" name="enem" value="CINCO VEZES OU MAIS" />
                                CINCO VEZES OU MAIS
                                <br/>
                                <br/>

                                <h4 style="font-size: 20px">27 NESTE ANO, VOCÃŠ PRETENDE PRESTAR VESTIBULAR:<br/></h4>
                                <br/>
                                <input type="radio" name="vest_est_ano" value="SOMENTE NA UNESPAR" required="true"/> 
                                SOMENTE NA UNESPAR<br/>
                                <input type="radio" name="vest_est_ano" value="NA UNESPAR E EM OUTRA(S) UNIVERSIDADE(S) DO PARANÁ?" /> 
                                NA UNESPAR E EM OUTRA(S) UNIVERSIDADE(S) DO PARANÁ?
                                <br/>
                                <input type="radio" name="vest_est_ano" value=" NA UNESPAR E EM OUTRA(S) UNIVERSIDADE(S) DO PAÍS" />
                                NA UNESPAR E EM OUTRA(S) UNIVERSIDADE(S) DO PAÍS
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">  28 VOCÊ JÁ? INICIOU ALGUM CURSO SUPERIOR?<br/></h4>
                                <br/>
                                <input type="radio" name="curs_superior" value="SIM, MAS NÃO CONCLUI" required="true"/>
                                SIM, MAS NÃO CONCLUI<br/>
                                <input type="radio" name="curs_superior" value=" SIM, MAS JÁ? CONCLUI" />
                                SIM, MAS JÁ? CONCLUI
                                <br/>
                                <input type="radio" name="curs_superior" value="NÃO" />
                                NÃO
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">29 QUAL O PRINCIPAL MOTIVO QUE O LEVOU A ESCOLHER O CURSO PARA O QUAL ESTÁ? SE ANDIDATANDO?<br/></h4>
                                <br/>

                                <input type="radio" name="motivo" value="INTERESSE PESSOAL PELA PROFISSÃO CORRESPONDENTE" required="true"/>
                                INTERESSE PESSOAL PELA PROFISSÃO CORRESPONDENTE<br/>
                                <input type="radio" name="motivo" value="CONVERSAS COM COLEGAS" />
                                CONVERSAS COM COLEGAS
                                <br/>
                                <input type="radio" name="motivo" value="INFLUÊNCIA DA FAMÍLIA" />
                                INFLUÊNCIA DA FAMÍLIA
                                <br/>
                                <input type="radio" name="motivomotivo" value="RESULTADO DE TESTE VOCACIONAL" />
                                RESULTADO DE TESTE VOCACIONAL
                                <br/>
                                <input type="radio" name="motivo" value="MELHORES POSSIBILIDADES NO MERCADO DE TRABALHO" />
                                MELHORES POSSIBILIDADES NO MERCADO DE TRABALHO
                                <br/>
                                <input type="radio" name="motivo" value="POSSIBILIDADE DE PODER CONTRIBUIR COM A SOCIEDADE" />
                                POSSIBILIDADE DE PODER CONTRIBUIR COM A SOCIEDADE
                                <br/>
                                <input type="radio" name="motivo" value="POSSIBILIDADE DE CONCILIAR O CURSO COM O TRABALHO" />
                                POSSIBILIDADE DE CONCILIAR O CURSO COM O TRABALHO
                                <br/>
                                <input type="radio" name="motivo" value="OUTRO MOTIVO" />
                                OUTRO MOTIVO
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">30 O QUE VOCÊ ESPERA, EM PRIMEIRO LUGAR, DE UM CURSO UNIVERSITÁRIO?<br/></h4>
                                <br/>
                                <input type="radio" name="expectativa" value=" FORMAÇÃO ACADÊMICO-PROFISSIONAL PARA O TRABALHO" required="true"/>
                                FORMAÇÃO ACADÊMICO-PROFISSIONAL PARA O TRABALHO

                                <br/>
                                <input type="radio" name="expectativa" value=" FORMAÇÃO TEÓRICA, VOLTADA PARA A PESQUISA " />
                                FORMAÇÃO TEÓRICA, VOLTADA PARA A PESQUISA
                                <br/>
                                <input type="radio" name="expectativa" value="FORMAÇÃO PARA ATIVIDADE PEDAGÓGICA " />
                                FORMAÇÃO PARA ATIVIDADE PEDAGÓGICA
                                <br/>
                                <input type="radio" name="expectativa" value="AQUISIÇÃO DE CONHECIMENTOS QUE ME PERMITAM COMPREENDER" />
                                AQUISIÇÃO DE CONHECIMENTOS QUE ME PERMITAM COMPREENDER
                                <br/>
                                <input type="radio" name="expectativa" value="AQUISIÇÃO DE CULTURA GERAL AMPLA" />
                                AQUISIÇÃO DE CULTURA GERAL AMPLA
                                <br/>
                                <input type="radio" name="expectativa" value="DIPLOMA DE CURSO SUPERIOR" />
                                DIPLOMA DE CURSO SUPERIOR
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px"> 31 QUAL DAS ATIVIDADES ABAIXO OCUPA A MAIOR PARTE DO SEU TEMPO LIVRE?</h4><br/>
                                <input type="radio" name="ocupacao" value="TV" required="true"/>
                                TV<br/>
                                <input type="radio" name="ocupacao" value=" RELIGIÃO" />RELIGIÃO
                                <br/>
                                <input type="radio" name="ocupacao" value="TEATRO" />
                                TEATRO<br/>
                                <input type="radio" name="ocupacao" value="CINEMA" />
                                CINEMA<br/>
                                <input type="radio" name="ocupacao" value="MÚSICA" />MÚSICA
                                <br/>
                                <input type="radio" name="ocupacao" value="  BARES E BOATES" />
                                BARES E BOATES<br/>
                                <input type="radio" name="ocupacao" value=" LEITURA" />
                                LEITURA
                                <br/>
                                <input type="radio" name="ocupacao" value="INTERNET" />
                                INTERNET
                                <br/>
                                <input type="radio" name="ocupacao" value="ESPORTES" />
                                ESPORTES
                                <br/>
                                <input type="radio" name="ocupacao" value="OUTRA" />
                                OUTRA
                                <br/>
                                <br/>


                                <h4 style="font-size: 20px">32 QUAL O MEIO QUE VOCÊ MAIS UTILIZA PARA SE MANTER INFORMADO (A)?</h4><br/>
                                <input type="radio" name="info" value="JORNAL ESCRITO"  required="true"/>
                                JORNAL ESCRITO<br/>
                                <input type="radio" name="info" value="TV" />
                                TV<br/>
                                <input type="radio" name="info" value="RÁDIO" />
                                RÁDIO<br/>
                                <input type="radio" name="info" value="REVISTAS" />
                                REVISTAS
                                <br/>
                                <input type="radio" name="info" value="INTERNET" />
                                INTERNET
                                <br/>
                                <input type="radio" name="info" value= "OUTROS" />
                                OUTROS
                                <br/>
                                <input type="radio" name="info" value= "NENHUM" />
                                NENHUM
                                <br/>



                            </div>
                            <div class="ls-modal-footer">
                                <input type="submit" class="ls-btn-primary" name="Enviar" /> 
                                <button class="ls-btn ls-float-right" data-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>
                </div><!-- /.modal -->







            </div>
        </main>

        <aside class="ls-notification">
            <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
                <h3 class="ls-title-2">Notificações</h3>
                <ul>
                    <li class="ls-dismissable">
                        <a href="#">Blanditiis est est dolorem iure voluptatem eos deleniti repellat et laborum consequatur</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Similique eos rerum perferendis voluptatibus</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Qui numquam iusto suscipit nisi qui unde</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Nisi aut assumenda dignissimos qui ea in deserunt quo deleniti dolorum quo et consequatur</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                    <li class="ls-dismissable">
                        <a href="#">Sunt consequuntur aut aut a molestiae veritatis assumenda voluptas nam placeat eius ad</a>
                        <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
                    </li>
                </ul>
            </nav>

            <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
                <h3 class="ls-title-2">Feedback</h3>
                <ul>
                    <li><a href="#">&gt; quo fugiat facilis nulla perspiciatis consequatur</a></li>
                    <li><a href="#">&gt; enim et labore repellat enim debitis</a></li>
                </ul>
            </nav>

            <nav class="ls-notification-list" id="ls-feedback-curtain" style="left: 1796px;">
                <h3 class="ls-title-2">Ajuda</h3>
                <ul>
                    <li class="ls-txt-center hidden-xs">
                        <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
                    </li>
                    <li><a href="#">&gt; Guia</a></li>
                    <li><a href="#">&gt; Wiki</a></li>
                </ul>
            </nav>
        </aside>

        <!-- We recommended use jQuery 1.10 or up -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://assets.locaweb.com.br/locastyle/3.8.2/javascripts/locastyle.js" type="text/javascript"></script>
    </body>
</html>