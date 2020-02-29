<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Matrícula de Calouros</title>

    <!-- Bootstrap core CSS -->
    <link href="http://200.201.19.20/servicos/matriculas_diploma/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://200.201.19.20/servicos/matriculas_diploma/static/css/aplicacao.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
     <script type="text/javascript">
            window.onload = function () {
                new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);
            }
        </script>
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                                    
                              </div>
        </div>
      <fieldset><legend>Matrícula - Portadores de Diploma</legend>

    <form  method="post" accept-charset="utf-8" role="form" id="formularioinscrito">    <div class='row'>
    <h2>Dados Pessoais</h2>
       <div class='col-sm-4'>
        <div class="form-group "><label for="data_nascimento">Data de Nascimento</label><input type="text" name="data_nascimento" value="" id="data_nascimento" class="form-control" maxlength="20" required="required"  />        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->

</div><!-- Final row-->

<div class='row'>
    <div class='col-sm-12'>

    <div class="form-group "><label for="nome">Nome Completo</label><input type="text" name="nome" value="" id="nome" class="form-control" maxlength="150" required="required"  />        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->
</div><!-- Final row -->


<div class='row'>
    <div class='col-sm-12'>

    <div class="form-group "><label for="necessidade">Possui alguma necessidade especial, especifique:</label><input type="text" name="necessidade" value="" id="necessidade" class="form-control" maxlength="250"  />        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->
</div><!-- Final row -->
<div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="sexo">Sexo</label><select name="sexo" name="sexo" id="sexo" class="form-control">
<option value="F">Feminino</option>
<option value="M">Masculino</option>
</select>        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->

    <div class='col-sm-4'>
        <div class="form-group "><label for="estado_civil">Estado Civil</label><select name="estado_civil" class="form-control">
<option value="1">Casado</option>
<option value="2">Divorciado</option>
<option value="3" selected="selected">Solteiro</option>
<option value="4">Viúvo</option>
<option value="5">Outros</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->

    <div class='col-sm-4'>
        <div class="form-group "><label for="raca">Cor/Raça</label><select name="raca" class="form-control">
<option value="" selected="selected">--Selecione--</option>
<option value="1">Amarela</option>
<option value="2">Branca</option>
<option value="3">Indígena</option>
<option value="4">Parda</option>
<option value="5">Preta</option>
<option value="6">Não declarada</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->
</div><!-- Final row -->

<div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="tipo_nacionalidade">Nacionalidade</label><select name="tipo_nacionalidade" class="form-control">
<option value="" selected="selected">--Selecione--</option>
<option value="1">Brasileira</option>
<option value="2">Brasileira - nascido no exterior ou naturalizado</option>
<option value="3">Estrangeira</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->


    <div class='col-sm-4'>
        <div class="form-group "><label for="pais_origem">País de Origem</label><select name="pais_origem" class="form-control">
<option value="170">ABISSINIA</option>
<option value="171">ACORES</option>
<option value="172">AFAR FRANCES</option>
<option value="241">AFEGANISTAO</option>
<option value="93">ALBANIA</option>
<option value="30">ALEMANHA</option>
<option value="174">ALTO VOLTA</option>
<option value="94">ANDORRA</option>
<option value="175">ANGOLA</option>
<option value="334">ANTARTICA FRANCESA</option>
<option value="337">ANTARTICO ARGENTINO</option>
<option value="333">ANTARTICO BRITANICO, TERRITORIO</option>
<option value="336">ANTARTICO CHILENO</option>
<option value="338">ANTARTICO NORUEGUES</option>
<option value="28">ANTIGUA E. DEP. BARBUDA</option>
<option value="29">ANTILHAS HOLANDESAS</option>
<option value="339">APATRIDA</option>
<option value="242">ARABIA SAUDITA</option>
<option value="176">ARGELIA</option>
<option value="21">ARGENTINA</option>
<option value="347">ARMENIA</option>
<option value="289">ARQUIPELAGO DE BISMARK</option>
<option value="285">ARQUIPELAGO MANAHIKI</option>
<option value="286">ARQUIPELAGO MIDWAY</option>
<option value="33">ARUBA</option>
<option value="198">ASCENSAO E TRISTAO DA CUNHA,IS</option>
<option value="287">ASHMORE E CARTIER</option>
<option value="288">AUSTRALIA</option>
<option value="95">AUSTRIA</option>
<option value="138">AZERBAIJAO</option>
<option value="243">BAHREIN</option>
<option value="342">BANGLADESH</option>
<option value="44">BARBADOS</option>
<option value="139">BASHKISTA</option>
<option value="177">BECHUANALANDIA</option>
<option value="31">BELGICA</option>
<option value="46">BELIZE</option>
<option value="178">BENIN</option>
<option value="83">BERMUDAS</option>
<option value="246">BHUTAN</option>
<option value="244">BIRMANIA</option>
<option value="22">BOLIVIA</option>
<option value="134">BOSNIA HERZEGOVINA</option>
<option value="179">BOTSUANA</option>
<option value="10">BRASIL</option>
<option value="245">BRUNEI</option>
<option value="96">BULGARIA</option>
<option value="238">BURKINA FASSO</option>
<option value="180">BURUNDI</option>
<option value="141">BURYAT</option>
<option value="343">CABO VERDE</option>
<option value="181">CAMAROES</option>
<option value="34">CANADA</option>
<option value="142">CARELIA</option>
<option value="247">CATAR</option>
<option value="143">CAZAQUISTAO</option>
<option value="248">CEILAO</option>
<option value="182">CEUTA E MELILLA</option>
<option value="183">CHADE</option>
<option value="144">CHECHEN INGUSTH</option>
<option value="23">CHILE</option>
<option value="42">CHINA</option>
<option value="249">CHINA (TAIWAN)</option>
<option value="97">CHIPRE</option>
<option value="145">CHUVASH</option>
<option value="275">CINGAPURA</option>
<option value="26">COLOMBIA</option>
<option value="40">COMUNIDADE DAS BAHAMAS</option>
<option value="54">COMUNIDADE DOMINICANA</option>
<option value="185">CONGO</option>
<option value="43">COREIA</option>
<option value="186">COSTA DO MARFIM</option>
<option value="51">COSTA RICA</option>
<option value="250">COVEITE</option>
<option value="130">CROACIA</option>
<option value="52">CUBA</option>
<option value="53">CURACAO</option>
<option value="146">DAGESTA</option>
<option value="187">DAOME</option>
<option value="340">DEPENDENCIA DE ROSS</option>
<option value="98">DINAMARCA</option>
<option value="188">DJIBUTI</option>
<option value="99">EIRE</option>
<option value="251">EMIRADOS ARABES UNIDOS</option>
<option value="27">EQUADOR</option>
<option value="100">ESCOCIA</option>
<option value="136">ESLOVAQUIA</option>
<option value="132">ESLOVENIA</option>
<option value="35">ESPANHA</option>
<option value="129">ESTADO DA CIDADE DO VATICANO</option>
<option value="57">ESTADOS ASSOC. DAS ANTILHAS</option>
<option value="36">ESTADOS UNIDOS DA AMERICA (EUA)</option>
<option value="147">ESTONIA</option>
<option value="190">ETIOPIA</option>
<option value="252">FILIPINAS</option>
<option value="102">FINLANDIA</option>
<option value="37">FRANCA</option>
<option value="192">GAMBIA</option>
<option value="193">GANA</option>
<option value="194">GAZA</option>
<option value="148">GEORGIA</option>
<option value="103">GIBRALTAR</option>
<option value="149">GORNO ALTAI</option>
<option value="32">GRA-BRETANHA</option>
<option value="59">GRANADA</option>
<option value="104">GRECIA</option>
<option value="84">GROENLANDIA</option>
<option value="292">GUAM</option>
<option value="61">GUATEMALA</option>
<option value="87">GUIANA FRANCESA</option>
<option value="195">GUINE</option>
<option value="344">GUINE BISSAU</option>
<option value="196">GUINE EQUATORIAL</option>
<option value="105">HOLANDA</option>
<option value="64">HONDURAS</option>
<option value="63">HONDURAS BRITANICAS</option>
<option value="253">HONG-KONG</option>
<option value="106">HUNGRIA</option>
<option value="254">IEMEN</option>
<option value="345">IEMEN DO SUL</option>
<option value="197">IFNI</option>
<option value="300">ILHA JOHNSTON E SAND</option>
<option value="69">ILHA MILHOS</option>
<option value="293">ILHAS BAKER</option>
<option value="107">ILHAS BALEARES</option>
<option value="199">ILHAS CANARIAS</option>
<option value="294">ILHAS CANTAO E ENDERBURG</option>
<option value="295">ILHAS CAROLINAS</option>
<option value="297">ILHAS CHRISTMAS</option>
<option value="184">ILHAS COMORES</option>
<option value="290">ILHAS COOK</option>
<option value="108">ILHAS COSMOLEDO (LOMORES)</option>
<option value="117">ILHAS DE MAN</option>
<option value="109">ILHAS DO CANAL</option>
<option value="296">ILHAS DO PACIFICO</option>
<option value="58">ILHAS FALKLANDS</option>
<option value="101">ILHAS FAROES</option>
<option value="298">ILHAS GILBERT</option>
<option value="60">ILHAS GUADALUPE</option>
<option value="299">ILHAS HOWLAND E JARVIS</option>
<option value="301">ILHAS KINGMAN REEF</option>
<option value="313">ILHAS LINHA</option>
<option value="305">ILHAS MACDONAL E HEARD</option>
<option value="302">ILHAS MACQUAIRE</option>
<option value="67">ILHAS MALVINAS</option>
<option value="303">ILHAS MARIANAS</option>
<option value="304">ILHAS MARSHALL</option>
<option value="306">ILHAS NIUE</option>
<option value="307">ILHAS NORFOLK</option>
<option value="315">ILHAS NOVA CALEDONIA</option>
<option value="318">ILHAS NOVAS HEBRIDAS</option>
<option value="308">ILHAS PALAU</option>
<option value="320">ILHAS PASCOA</option>
<option value="321">ILHAS PITCAIRIN</option>
<option value="309">ILHAS SALOMAO</option>
<option value="326">ILHAS SANTA CRUZ</option>
<option value="65">ILHAS SERRANAS</option>
<option value="310">ILHAS TOKELAU</option>
<option value="80">ILHAS TURCA</option>
<option value="47">ILHAS TURKS E CAICOS</option>
<option value="82">ILHAS VIRGENS AMERICANAS</option>
<option value="81">ILHAS VIRGENS BRITANICAS</option>
<option value="311">ILHAS WAKE</option>
<option value="332">ILHAS WALLIS E FUTUNA</option>
<option value="255">INDIA</option>
<option value="256">INDONESIA</option>
<option value="110">INGLATERRA</option>
<option value="257">IRA</option>
<option value="258">IRAQUE</option>
<option value="112">IRLANDA</option>
<option value="111">IRLANDA DO NORTE</option>
<option value="113">ISLANDIA</option>
<option value="259">ISRAEL</option>
<option value="39">ITALIA</option>
<option value="114">IUGOSLAVIA</option>
<option value="66">JAMAICA</option>
<option value="41">JAPAO</option>
<option value="260">JORDANIA</option>
<option value="150">KABARDINO BALKAR</option>
<option value="312">KALIMATAN</option>
<option value="151">KALMIR</option>
<option value="152">KARACHAEVOCHERKESS</option>
<option value="346">KARA KALPAK</option>
<option value="153">KHAKASS</option>
<option value="261">KMER/CAMBOJA</option>
<option value="154">KOMI</option>
<option value="262">KUWAIT</option>
<option value="263">LAOS</option>
<option value="200">LESOTO</option>
<option value="155">LETONIA</option>
<option value="264">LIBANO</option>
<option value="201">LIBERIA</option>
<option value="202">LIBIA</option>
<option value="115">LIECHTENSTEIN</option>
<option value="156">LITUANIA</option>
<option value="116">LUXEMBURGO</option>
<option value="265">MACAU</option>
<option value="205">MADAGASCAR</option>
<option value="203">MADEIRA</option>
<option value="266">MALASIA</option>
<option value="204">MALAWI</option>
<option value="267">MALDIVAS,IS</option>
<option value="206">MALI</option>
<option value="157">MARI</option>
<option value="207">MARROCOS</option>
<option value="68">MARTINICA</option>
<option value="268">MASCATE</option>
<option value="208">MAURICIO</option>
<option value="209">MAURITANIA</option>
<option value="85">MEXICO</option>
<option value="284">MIANMA</option>
<option value="210">MOCAMBIQUE</option>
<option value="158">MOLDAVIA</option>
<option value="118">MONACO</option>
<option value="269">MONGOLIA</option>
<option value="137">MONTENEGRO</option>
<option value="70">MONTE SERRAT</option>
<option value="240">NAMIBIA</option>
<option value="314">NAURU</option>
<option value="270">NEPAL</option>
<option value="211">NGUANE</option>
<option value="71">NICARAGUA</option>
<option value="213">NIGERIA</option>
<option value="119">NORUEGA</option>
<option value="316">NOVA GUINE</option>
<option value="317">NOVA ZELANDIA</option>
<option value="271">OMAN</option>
<option value="159">OSSETIA SETENTRIONAL</option>
<option value="121">PAIS DE GALES</option>
<option value="122">PAISES BAIXOS</option>
<option value="272">PALESTINA</option>
<option value="72">PANAMA</option>
<option value="73">PANAMA - ZONA DO CANAL</option>
<option value="214">PAPUA NOVA GUINE</option>
<option value="273">PAQUISTAO</option>
<option value="24">PARAGUAI</option>
<option value="89">PERU</option>
<option value="322">POLINESIA FRANCESA</option>
<option value="123">POLONIA</option>
<option value="74">PORTO RICO</option>
<option value="45">PORTUGAL</option>
<option value="215">PRACAS NORTE AFRICANAS</option>
<option value="216">PROTETOR DO SUDOESTE AFRICANO</option>
<option value="217">QUENIA</option>
<option value="160">QUIRGUISTAO</option>
<option value="75">QUITASUENO</option>
<option value="189">REPUBLICA ARABE DO EGITO</option>
<option value="218">REPUBLICA CENTRO AFRICANA</option>
<option value="173">REPUBLICA DA AFRICA DO SUL</option>
<option value="140">REPUBLICA DA BIELORRUSSIA</option>
<option value="133">REPUBLICA DA MACEDONIA</option>
<option value="56">REPUBLICA DE EL SALVADOR</option>
<option value="291">REPUBLICA DE FIJI</option>
<option value="120">REPUBLICA DE MALTA</option>
<option value="191">REPUBLICA DO GABAO</option>
<option value="62">REPUBLICA DO HAITI</option>
<option value="55">REPUBLICA DOMINICANA</option>
<option value="212">REPUBLICA DO NIGER</option>
<option value="88">REPUBLICA GUIANA</option>
<option value="135">REPUBLICA TCHECA</option>
<option value="48">RESERVADO</option>
<option value="49">RESERVADO</option>
<option value="50">RESERVADO</option>
<option value="20">RESERVADO</option>
<option value="219">REUNIAO</option>
<option value="220">RODESIA (ZIMBABWE)</option>
<option value="124">ROMENIA</option>
<option value="76">RONCADOR</option>
<option value="221">RUANDA</option>
<option value="274">RUIQUIU,IS</option>
<option value="348">RUSSIA</option>
<option value="222">SAARA ESPANHOL</option>
<option value="323">SABAH</option>
<option value="324">SAMOA AMERICANA</option>
<option value="325">SAMOA OCIDENTAL</option>
<option value="125">SAN MARINO</option>
<option value="223">SANTA HELENA</option>
<option value="77">SANTA LUCIA</option>
<option value="78">SAO CRISTOVAO</option>
<option value="224">SAO TOME E PRINCIPE</option>
<option value="79">SAO VICENTE</option>
<option value="327">SARAWAK</option>
<option value="349">SENEGAL</option>
<option value="276">SEQUIN</option>
<option value="226">SERRA LEOA</option>
<option value="131">SERVIA</option>
<option value="225">SEYCHELLES</option>
<option value="277">SIRIA</option>
<option value="227">SOMALIA, REPUBLICA</option>
<option value="278">SRI-LANKA</option>
<option value="86">ST. PIERRE ET MIQUELON</option>
<option value="228">SUAZILANDIA</option>
<option value="229">SUDAO</option>
<option value="126">SUECIA</option>
<option value="38">SUICA</option>
<option value="90">SURINAME</option>
<option value="127">SVALBARD E JAN MAYER,IS</option>
<option value="161">TADJIQUISTAO</option>
<option value="279">TAILANDIA</option>
<option value="230">TANGANICA</option>
<option value="350">TANZANIA</option>
<option value="162">TARTARIA</option>
<option value="128">TCHECOSLOVAQUIA</option>
<option value="335">TERR. ANTARTICO DA AUSTRALIA</option>
<option value="341">TERRAS AUSTRAIS</option>
<option value="231">TERRIT. BRITANICO DO OCEANO INDICO</option>
<option value="328">TERRITORIO DE COCOS</option>
<option value="319">TERRITORIO DE PAPUA</option>
<option value="329">TIMOR</option>
<option value="233">TOGO</option>
<option value="330">TONGA</option>
<option value="232">TRANSKEI</option>
<option value="280">TREGUA, ESTADO</option>
<option value="91">TRINIDAD E TOBAGO</option>
<option value="234">TUNISIA</option>
<option value="163">TURCOMENISTAO</option>
<option value="281">TURQUIA</option>
<option value="331">TUVALU</option>
<option value="164">TUVIN</option>
<option value="165">UCRANIA</option>
<option value="166">UDMURT</option>
<option value="235">UGANDA</option>
<option value="167">UNIAO SOVIETICA</option>
<option value="25">URUGUAI</option>
<option value="168">UZBEQUISTAO</option>
<option value="92">VENEZUELA</option>
<option value="282">VIETNA DO NORTE</option>
<option value="283">VIETNA DO SUL</option>
<option value="169">YAKUT</option>
<option value="236">ZAIRE</option>
<option value="237">ZAMBIA</option>
<option value="239">ZIMBABWE</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->

</div><!-- Final row -->

<div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="uf_naturalidade">UF Naturalidade</label>
            <select name="uf_naturalidade" class="form-control" id="estado" ></select>
    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->        
    <div class='col-sm-4'>
        <div class="form-group "><label for="cidade">Naturalidade</label>        <!--echo form_dropdown('cidade_naturalidade', obtem_estados_brasileiros(),'','class="form-control" id="cidade_naturalidade"');-->
        <select name="cidade_naturalidade" class="form-control" id="cidade">
            <option value="">-- Escolha uma cidade --</option>
        </select>
                <span id="cidade" class="carregando"><br/>Aguarde, carregando...</span>
    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->        
    <div class='col-sm-4'>
        <div class="form-group "><label for="renda">Renda Familiar</label><select name="renda" name="renda" id="renda" class="form-control">
<option value="MENOS DE 1 SALARIO MÍNIMO">MENOS DE 1 SALARIO MÍNIMO</option>
<option value="DE 1 A 2">DE 1 A 2</option>
<option value="DE 2 A 4">DE 2 A 4</option>
<option value="DE 5 A 10">DE 5 A 10</option>
<option value="DE 11 A 15">DE 11 A 15</option>
<option value="MAIS DE 15 SALÁRIOS">MAIS DE 15 SALÁRIOS</option>
</select>        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->
</div><!-- Final row -->
<div class='row'>
<h2>Documentação</h2>
        <div class='col-sm-4'>
            <div class="form-group "><label for="tipo_certidao">Tipo de Certidão</label><select name="tipo_certidao" class="form-control">
<option value="N">Nascimento</option>
<option value="C">Casamento</option>
</select>            </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-4'>
            <div class="form-group "><label for="data_emissao_certidao">Data de Emissão</label><input type="text" name="data_emissao_certidao" value="" id="data_emissao_certidao" class="form-control" maxlength="20"  />            </div><!-- form-group-->
        </div><!-- fim col-sm-4-->
    </div>

        <div class='row'>

        <div class='col-sm-4'>
            <div class="form-group "><label for="uf_cartorio">UF do Cartório</label><select name="uf_cartorio" class="form-control">
<option value="" selected="selected">--Selecione um Estado--</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select>            </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-4'>
            <div class="form-group "><label for="nome_cartorio">Nome do Cartório</label><input type="text" name="nome_cartorio" value="" id="nome_cartorio" class="form-control" maxlength="200"  />            </div><!-- form-group-->
        </div><!-- fim col-sm-4-->
    </div>

    <div class='row'>

        <div class='col-sm-4'>
        <div class="form-group "><label for="numero_certidao">Número da Certidão</label><input type="text" name="numero_certidao" value="" id="numero_certidao" class="form-control" maxlength="100"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->


        <div class='col-sm-4'>
        <div class="form-group "><label for="folha_certidao">Folha</label><input type="text" name="folha_certidao" value="" id="folha_certidao" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-4'>
        <div class="form-group "><label for="livro_certidao">Livro</label><input type="text" name="livro_certidao" value="" id="livro_certidao" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->


    </div><!-- fim row -->



<div class='row'>

        <div class='col-sm-3'>
        <div class="form-group "><label for="rg">Número do RG</label><input type="text" name="rg" value="" id="rg" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-3'>
        <div class="form-group "><label for="data_expedicao_rg">Data de Expedição do RG</label><input type="text" name="data_expedicao_rg" value="" id="data_expedicao_rg" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->


       <div class='col-sm-3'>
        <div class="form-group "><label for="orgao_emissor_rg">Orgão Emissor do RG</label><select name="orgao_emissor_rg" class="form-control">
<option value="" selected="selected">--Selecione--</option>
<option value="10">SSP</option>
<option value="40">MILITARES</option>
<option value="41">AERONAUT</option>
<option value="42">EXERCITO</option>
<option value="43">MARINHA</option>
<option value="44">POLFED</option>
<option value="60">CIC</option>
<option value="61">CRA</option>
<option value="62">CRAS</option>
<option value="63">CRB</option>
<option value="64">CRC</option>
<option value="65">CRCI</option>
<option value="66">CREN</option>
<option value="67">CREA</option>
<option value="68">CRES</option>
<option value="69">CRF</option>
<option value="70">CREFITO</option>
<option value="71">CRM</option>
<option value="72">CRMV</option>
<option value="73">OMB</option>
<option value="74">CRN</option>
<option value="75">CRO</option>
<option value="76">CRPRP</option>
<option value="77">CRP</option>
<option value="78">CRQ</option>
<option value="79">CRPC</option>
<option value="80">OAB</option>
<option value="81">OE</option>
<option value="82">DE</option>
</select>        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->


    <div class='col-sm-3'>
        <div class="form-group "><label for="uf_rg">UF do RG</label><select name="uf_rg" class="form-control">
<option value="">--Selecione um Estado--</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
<option value="0" selected="selected">--Selecine--</option>
</select>        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

</div><!-- final row -->

<div class='row'>

        <div class='col-sm-3'>
        <div class="form-group "><label for="titulo_eleitor">Título de Eleitor</label><input type="text" name="titulo_eleitor" value="" id="titulo_eleitor" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-3'>
        <div class="form-group "><label for="zona">Zona</label><input type="text" name="zona" value="" id="zona" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

        <div class='col-sm-3'>
        <div class="form-group "><label for="secao">Seção</label><input type="text" name="secao" value="" id="secao" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

</div><!-- fim row -->

<div class='row'>
        <div class='col-sm-3'>
        <div class="form-group "><label for="cpf">CPF</label><input type="text" name="cpf" value="" id="cpf" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

                <div class='col-sm-3'>
        <div class="form-group "><label for="reservista">Carteira de Reservista</label><input type="text" name="reservista" value="" id="reservista" class="form-control" maxlength="20"  />        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->

                        <div class='col-sm-3'>
        <div class="form-group "><label for="orgao_emissor_reservista">Órgão Emissor Carteira Reservista</label><select name="orgao_emissor_reservista" class="form-control">
<option value="" selected="selected">--Selecione--</option>
<option value="10">SSP</option>
<option value="40">MILITARES</option>
<option value="41">AERONAUT</option>
<option value="42">EXERCITO</option>
<option value="43">MARINHA</option>
<option value="44">POLFED</option>
<option value="60">CIC</option>
<option value="61">CRA</option>
<option value="62">CRAS</option>
<option value="63">CRB</option>
<option value="64">CRC</option>
<option value="65">CRCI</option>
<option value="66">CREN</option>
<option value="67">CREA</option>
<option value="68">CRES</option>
<option value="69">CRF</option>
<option value="70">CREFITO</option>
<option value="71">CRM</option>
<option value="72">CRMV</option>
<option value="73">OMB</option>
<option value="74">CRN</option>
<option value="75">CRO</option>
<option value="76">CRPRP</option>
<option value="77">CRP</option>
<option value="78">CRQ</option>
<option value="79">CRPC</option>
<option value="80">OAB</option>
<option value="81">OE</option>
<option value="82">DE</option>
</select>        </div><!-- form-group-->
        </div><!-- fim col-sm-4-->
</div><!-- fim div row -->
<div class="row">
<h2>Dados Familiares</h2>

    <div class='col-sm-3'>

        <div class="form-group "><label for="nome_mae">Nome da Mãe</label><input type="text" name="nome_mae" value="" id="nome_mae" class="form-control" maxlength="100"  />    </div>
    </div>

    <div class='col-sm-3'>

        <div class="form-group "><label for="rg_mae">RG da Mãe</label><input type="text" name="rg_mae" value="" id="rg_mae" class="form-control" maxlength="100"  />    </div>
    </div>

    <div class='col-sm-3'>

        <div class="form-group "><label for="uf_emissao_rg_mae">UF Emissor</label><select name="uf_emissao_rg_mae" class="form-control">
<option value="" selected="selected">--Selecione um Estado--</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select>    </div>
    </div>     


        <div class='col-sm-3'>

        <div class="form-group "><label for="escolaridade_mae">Grau de Escolaridade</label><select name="escolaridade_mae" class="form-control">
<option value="0">Não Informada</option>
<option value="1">Ensino Fundamental - Incompleto</option>
<option value="2">Ensino Fundamental - Completo</option>
<option value="3">Ensino Médio - Incompleto</option>
<option value="4">Ensino Médio - Completo</option>
<option value="5">Ensino Superior - Incompleto</option>
<option value="6">Ensino Superior - Completo</option>
<option value="7">Pós-Graduação</option>
<option value="8">Analfabeto</option>
</select>    </div>
    </div> 
                
</div>
<div class='row'>

    <div class='col-sm-3'>

        <div class="form-group "><label for="nome_pai">Nome do Pai</label><input type="text" name="nome_pai" value="" id="nome_pai" class="form-control" maxlength="100"  />    </div>
    </div>

    <div class='col-sm-3'>

        <div class="form-group "><label for="rg_pai">RG do Pai</label><input type="text" name="rg_pai" value="" id="rg_pai" class="form-control" maxlength="100"  />    </div>
    </div>

    <div class='col-sm-3'>

        <div class="form-group "><label for="uf_emissao_rg_pai">UF Emissor</label><select name="uf_emissao_rg_pai" class="form-control">
<option value="" selected="selected">--Selecione um Estado--</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select>    </div>
    </div>     


        <div class='col-sm-3'>

        <div class="form-group "><label for="escolaridade_pai">Grau de Escolaridade</label><select name="escolaridade_pai" class="form-control">
<option value="0">Não Informada</option>
<option value="1">Ensino Fundamental - Incompleto</option>
<option value="2">Ensino Fundamental - Completo</option>
<option value="3">Ensino Médio - Incompleto</option>
<option value="4">Ensino Médio - Completo</option>
<option value="5">Ensino Superior - Incompleto</option>
<option value="6">Ensino Superior - Completo</option>
<option value="7">Pós-Graduação</option>
<option value="8">Analfabeto</option>
</select>    </div>
    </div> 
                
</div> <div class='row'>
    <h2>Endereço</h2>
    <div class='col-sm-4'>
        <div class="form-group "><label for="endereco">Endereço</label><input type="text" name="endereco" value="" id="endereco" class="form-control" maxlength="200"  />        </div><!-- form-group-->
    </div><!-- fim col-sm-4-->

        <div class='col-sm-2'>
        <div class="form-group "><label for="numero_endereco">Número</label><input type="text" name="numero_endereco" value="" id="numero_endereco" class="form-control" maxlength="20"  />        </div><!-- form-group-->
    </div><!-- fim col-sm-4-->

        <div class='col-sm-2'>
        <div class="form-group "><label for="complemento">Complemento</label><input type="text" name="complemento" value="" id="complemento" class="form-control" maxlength="100"  />        </div><!-- form-group-->
    </div><!-- fim col-sm-4-->

            <div class='col-sm-4'>
        <div class="form-group "><label for="bairro">Bairro</label><input type="text" name="bairro" value="" id="bairro" class="form-control" maxlength="100"  />        </div><!-- form-group-->
    </div><!-- fim col-sm-4-->
</div>
 <div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="cep">CEP</label><input type="text" name="cep" value="" id="cep" class="form-control" maxlength="20"  />        </div><!-- form-group-->
    </div><!-- fim col-sm-4-->

    <div class='col-sm-4'>
        <div class="form-group "><label for="uf_endereco">UF</label><select name="uf_endereco" class="form-control" id="uf_endereco">
<option value="" selected="selected">--Selecione um Estado--</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select>
    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->        
    <div class='col-sm-4'>
        <div class="form-group "><label for="cidade_endereco">Cidade</label>        <!--echo form_dropdown('cidade_endereco', obtem_estados_brasileiros(),'','class="form-control" id="cidade_endereco"');-->
        <select name="cidade_endereco" class="form-control" id="cidade_endereco">
            <option value="">-- Escolha uma cidade --</option>
        </select>
                <span id="cidade_endereco_carregando" class="carregando"><br/>Aguarde, carregando...</span>
</div></div></div>



 <div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="zona_residencial">Zona Residencial</label><select name="zona_residencial" name="zona_residencial" id="zona_residencial" class="form-control">
<option value="R">Rural</option>
<option value="U">Urbana</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->    

        <div class='col-sm-4'>
        <div class="form-group "><label for="tipo_moradia">Tipo de Moradia</label><select name="tipo_moradia" name="tipo_moradia" id="tipo_moradia" class="form-control">
<option value="P">Própria</option>
<option value="A">Alugada</option>
<option value="C">Cedida</option>
</select>    </div><!-- Final form-group -->
    </div><!-- Final col-sm-4 -->    
</div> <div class='row'>
    <h2>Contatos</h2>
    <div class='col-sm-4'>
<div class="form-group "><label for="telefone_residencial">Telefone Residencial</label><input type="text" name="telefone_residencial" value="" id="telefone_residencial" class="form-control" maxlength="100"  />        </div>
    </div>

    <div class='col-sm-4'>
        <div class="form-group "><label for="telefone_comercial">Telefone Comercial</label><input type="text" name="telefone_comercial" value="" id="telefone_comercial" class="form-control" maxlength="100"  />    </div>
</div>
    <div class='col-sm-4'>
        <div class="form-group "><label for="ramal">Ramal</label><input type="text" name="ramal" value="" id="ramal" class="form-control" maxlength="100"  />    </div>
</div>
</div>

<div class='row'>
    <div class='col-sm-4'>
        <div class="form-group "><label for="telefone_celular">Telefone Celular</label><input type="text" name="telefone_celular" value="" id="telefone_celular" class="form-control" maxlength="100"  /></div>
</div>

    <div class='col-sm-4'>
        <div class="form-group "><label for="email">E-mail</label><input type="text" name="email" value="" id="email" class="form-control" maxlength="100"  /></div>
</div>
</div>
<div class='row'>
    <h2>DADOS DO ENSINO MÉDIO</h2>
    <div class='col-sm-3'>
<div class="form-group "><label for="nome_escola">Nome da Escola</label><input type="text" name="nome_escola" value="" id="nome_escola" class="form-control" maxlength="100" required="required"  />        </div>
    </div>

    <div class='col-sm-3'>
        <div class="form-group "><label for="cidade_escola">Cidade</label><input type="text" name="cidade_escola" value="" id="cidade_escola" class="form-control" maxlength="100" required="required"  />    </div>
</div>
    <div class='col-sm-3'>
        <div class="form-group "><label for="ano_conclusao">Ano de Conclusão</label><input type="text" name="ano_conclusao" value="" id="ano_conclusao" class="form-control" maxlength="20" required="required"  />    </div>
</div>

    <div class='col-sm-3'>
        <div class="form-group "><label for="tipo_escola">Pública ou Particular</label><select name="tipo_escola" name="tipo_escola" id="tipo_escola" class="form-control">
<option value="publica">Pública</option>
<option value="particular">Particular</option>
</select>        </div><!-- Final form-group -->
    </div><!-- Final col-sm-4-->

</div>
<div class="row"><div class='col-sm-4'><button name="Avancar" type="submit" class="btn btn-primary" >Avançar</button>&nbsp;<a class="btn btn-default" href="http://200.201.19.20/servicos/matriculas_diploma/">Cancelar<a/>
</form>
</div>
</div>    
<br/>
</fieldset>
     <?php

       if (isset($_POST["Avancar"])) {
       $data_nascimento = $_POST['data_nascimento'];
       $nome = $_POST['nome'];
       $necessidade = $_POST['necessidade'];
       $sexo = $_POST['sexo'];
       $estado_civil = $_POST['estado_civil'];
       $raca = $_POST['raca'];
       $tipo_nacionalidade = $_POST['tipo_nacionalidade'];
       $pais_origem = $_POST['pais_origem'];
       $uf_naturalidade = $_POST['uf_naturalidade'];
       $cidade_naturalidade = $_POST['cidade_naturalidade'];
       $renda = $_POST['renda'];
       $tipo_certidao = $_POST['tipo_certidao'];
       $data_emissao_certidao= $_POST['data_emissao_certidao'];
       $uf_cartorio = $_POST['uf_cartorio'];
       $nome_cartorio = $_POST['nome_cartorio'];
       $numero_certidao = $_POST['numero_certidao'];
       $folha_certidao = $_POST['folha_certidao'];
       $livro_certidao = $_POST['livro_certidao'];
       $rg = $_POST['rg'];
       $data_expedicao_rg = $_POST['data_expedicao_rg'];
       $orgao_emissor_rg = $_POST['orgao_emissor_rg'];
       $uf_rg = $_POST['uf_rg'];
       $titulo_eleitor = $_POST['titulo_eleitor'];
       $zona = $_POST['zona'];
       $secao = $_POST['secao'];
       $cpf = $_POST['cpf'];
       $reservista = $_POST['reservista'];
       $orgao_emissor_reservista = $_POST['orgao_emissor_reservista'];
       $nome_mae = $_POST['nome_mae'];
       $rg_mae = $_POST['rg_mae'];
       $uf_emissao_rg_mae = $_POST['uf_emissao_rg_mae'];
       $escolaridade_mae = $_POST['escolaridade_mae'];
       $nome_pai = $_POST['nome_pai'];
       $rg_pai = $_POST['rg_pai'];
       $uf_emissao_rg_pai = $_POST['uf_emissao_rg_pai'];
       $escolaridade_pai = $_POST['escolaridade_pai'];
       $endereco = $_POST['endereco'];
       $numero_endereco = $_POST['numero_endereco'];
       $complemento = $_POST['complemento'];
       $bairro = $_POST['bairro'];
       $cep = $_POST['cep'];
       $uf_endereco = $_POST['uf_endereco'];
       $cidade_endereco = $_POST['cidade_endereco'];
       $zona_residencial = $_POST['zona_residencial'];
       $tipo_moradia = $_POST['tipo_moradia'];
       $telefone_residencial = $_POST['telefone_residencial'];
       $telefone_comercial = $_POST['telefone_comercial'];
       $ramal = $_POST['ramal'];
       $telefone_celular = $_POST['telefone_celular'];
       $email = $_POST['email'];
       $nome_escola = $_POST['nome_escola'];
       $cidade_escola = $_POST['cidade_escola'];
       $ano_conclusao = $_POST['ano_conclusao'];
       $tipo_escola = $_POST['tipo_escola'];

   }


     ?>   
    </div>
    <script src="http://200.201.19.20/servicos/matriculas_diploma/static/js/jquery-1.11.0.js"></script>
    <script src="http://200.201.19.20/servicos/matriculas_diploma/static/js/maskedinput.min.js"></script>
    <script src="http://200.201.19.20/servicos/matriculas_diploma/static/js/jquery.validate.js"></script>
    <script src="http://200.201.19.20/servicos/matriculas_diploma/static/js/aplicacao.js"></script>
  </body>
</html>