
<html class="ls-theme-green">
    <head>
        <title>P�gina com a estrutura inicial</title>


        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="Insira aqui a descri��o da p�gina.">
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
        

        <div class="ls-topbar ">

            <!-- Barra de Notifica��es -->
            <div class="ls-notification-topbar">

                <!-- Links de apoio -->
                <div class="ls-alerts-list">
                    <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notifica��es</span></a>
                    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
                    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugest�es</span></a>
                </div>

                <!-- Dropdown com detalhes da conta de usu�rio -->
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
                        <span class="ls-name">Jo�o Kennedy</span>
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

            <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-next"><span class="ls-text">Voltar � lista de servi�os</span></a>

            <!-- Nome do produto/marca com sidebar -->
            <h1 class="ls-brand-name">
                <a href="home" class="ls-ico-earth">
                    <small>Uma descri��o ou outro nome</small>
                    O nome do Produto
                </a>
            </h1>

            <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
        </div>


        <aside class="ls-sidebar">

            <div class="ls-sidebar-inner">
                <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar � lista de servi�os</span></a>

                <nav class="ls-menu">
                    <ul>
                        <li><a href="cpf.php" class="ls-ico-dashboard" title="CPF">CPF</a></li>
                        <li><a href="alunos.php" class="ls-ico-users" title="Clientes">Alunos</a></li>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/stats" class="ls-ico-stats" title="Relat�rios da revenda">Relat�rios da revenda</a></li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configura��es">Configura��es</a>
                            <ul>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Dom�nios da Revenda</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Apar�ncia</a></li>
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
                <h1 class="ls-title-intro ls-ico-home"></h1>
                <form>
                    <select name="tabela" id="tabela"><?php
                        include ("conexao.php");
//Consulta com a tabela//
//Selecione tudo de nomedatabela em ordem crescente pelo nome 
                        $consulta = mysql_query("SELECT * FROM curso order by cur_nome ASC");
//Fazendo o looping para exibi��o de todos registros que contiverem em nomedatabela
                        while ($dados = mysql_fetch_array($consulta)) {
                            echo("<option value='" . $dados['campo1'] . "'>" . $dados['campo1'] . "</option>");
                        }
                        ?></select>
                </form>

            </div><!-- /.modal -->







        </main>

        <aside class="ls-notification">
            <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
                <h3 class="ls-title-2">Notifica��es</h3>
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