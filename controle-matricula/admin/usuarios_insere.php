<!DOCTYPE html>

<?php 
//session_start();
include "conecta.php";
require("verificaselogado.php");
?>
        <?php
          //geracao de senha automatica
          //DETERMINA OS CARACTERES QUE CONTERÃO A SENHA
          $caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ*@$%";
          //EMBARALHA OS CARACTERES E PEGA APENAS OS 8 PRIMEIROS
          $senhapura = substr(str_shuffle($caracteres),0,8);

           if(isset($_POST['salva'])){
            $data= date("d/m/Y H:i:s");
            $nome=$_POST['nome'];
            $senha=md5($_POST['password']);
            $email=$_POST['email'];
            //$acesso=$_POST['acesso'];
            //$ip=$_POST['ip'];
            //$ativo=$_POST['ativo'];
            //$curso=$_POST['curso'];
            $insere="INSERT INTO usuario (usu_nome, usu_email, usu_senha) VALUES ('$nome','$email','$senha')";
            if (mysqli_query($link,$insere)) {

              $linkacesso = '<a href="http://200.201.19.40/redacoes">Link de Acesso</a>';
              $mensagemHTML='<p>Cadastro: Sistema de Redações</p><p>'.$nome.'  seu cadastro foi efetuado com sucesso!!!!</p><p>'.$linkacesso.'</p><p>Login: '. $email .' </p><p> Senha: '.$_POST['password'].'</p>
              <hr><p>Este é um E-mail automático. Não é necessário responder!</p>';

              //$partes = explode('@', $email);
              //$emailsemdominio = array_shift($partes);
              //$ultimoNome = array_pop($partes);
              $emailsemdominio = strstr($email, '@', TRUE);

              include "email.php";
              /*
              // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
              // O return-path deve ser ser o mesmo e-mail do remetente.
              $headers = "MIME-Version: 1.1'''\r\n'''";
              $headers .= "Content-type: text/plain; charset=utf-8'''\r\n";
              $headers .= "From: no-reply.vestibular@unespar.edu.br'''\r\n'''"; // remetente
              $headers .= "Return-Path: no-reply.vestibular@unespar.edu.br'''\r\n'''"; // return-path
              $mensagem = "<p>
                                 Link de acesso: <a href='200.201.19.40/redacoes'>Clique aqui</a><br>
                                  Usuário: $email <br>
                                  senha:".$_POST['password']."
                            </p> ";
              $envio = mail($email, "Cadastro no Sistema de Redações", $mensagem, $headers);
              if($envio){
              $msg = "<div class='ls-alert-success'>Mensagem enviada com sucesso!!! <br /></div>";
              }else{
              $msg = "<div class='ls-alert-success'>A mensagem não pode ser enviada!!! <br /></div>";
              }

              //******************   FUNÇÂO E-MAIL   *********************
if (eregi('fafipa.br$|gmail.com$|gmail.com$|200.201.19.40', $_SERVER[HTTP_HOST])) {
        $emailsender='no-reply.vestibular@unespar.edu.br'; // Substitua essa linha pelo seu e-mail@seudominio
    } else {
        $emailsender = "no-reply.vestibular@unespar.edu.br" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
    }
     
    // Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  
    if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
    else $quebra_linha = "\n"; //Se "não for Windows"

      // linha abaixo gera link que vai para o email do inscrito onde este possa gerar outro boleto
      $linkinsc = '<a href="200.201.19.40/redacoes"> Link de Acesso </a>';

      $mensagemHTML='<p>Cadastro: Sistema de Redações</p><p>'.$nome.'  seu cadastro foi efetuado com sucesso!!!!</p><p>'.$linkinsc.'</p><p>Login:'. $email .' </p><p> Senha:'.$_POST['password'].'</p>

      <hr><p>Este é um E-mail automático. Não é necessário responder!</p>';
      //linha acima : Este é um e-mail automatico. Não é necesário responder!

    // Passando os dados obtidos pelo formulário para as variáveis abaixo
    $nomeremetente     = "Sistema de Redações";
    $emailremetente    = "no-reply.vestibular@unespar.edu.br";
    $emaildestinatario = $email;
    //$comcopia          = $_POST['comcopia'];
    //$comcopiaoculta    = $_POST['comcopiaoculta'];
    $assunto           = "Cadastro no Sistema de Redações";
    $mensagem          = $mensagemHTML;

    //Montando a mensagem a ser enviada no corpo do e-mail.
    $mensagemHTM = '<hr>'.$mensagem.'</i></b></p>';

    //Montando o cabeÃ§alho da mensagem
    $headers = "MIME-Version: 1.1" .$quebra_linha;
    $headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
    // Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
    $headers .= "From: " . $emailsender.$quebra_linha;
    $headers .= "Cc: " . $comcopia . $quebra_linha;
    $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
    $headers .= "Reply-To: " . $emailremetente . $quebra_linha;
    // Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

    //Enviando a mensagem

    //É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

    if(!mail($emaildestinatario, $assunto, $mensagemHTM, $headers ,"-r".$emailsender)){ // Se for Postfix
      $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
      mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
    }
     //fim da funcao envia email
    //}//fim do While protocolo
    //}//fim do if principal
    //Mostrando na tela as informações enviadas por e-mail
    //print "Mensagem <b>$assunto</b> enviada com sucesso!<br><br>
    //De: $emailsender<br>
    //Para: $emaildestinatario<br>
    //Com cópia: $comcopia<br>
    //Com cópia Oculta: $comcopiaoculta
    //<p><a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a></p>"
    //******************   FIM E-MAIL   *************************
*/


              $msg.="<div class='ls-alert-success'><strong>Atenção:</strong>Usuário inserido com sucesso!!! </div>";
            //echo "<div class='ls-alert-success'><strong>Atenção:</strong>Usuário alterado com sucesso!!! </div>";
               header("location:usuarios.php?msg=$msg");
            } else {
              echo "Error updating record: " . mysqli_error($link);
            }
}
        ?>
<html class="ls-theme-green">
  <head>
    <title>Vestibular - Redações</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.8.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">

     <SCRIPT LANGUAGE="JavaScript">
function Confirma() {
var confirma = confirm("Confirma remoção deste registro?")
if (confirma){
alert("Removido!")
return true
} else {
alert("Remoção cancelada!")
return false
} 
}
</SCRIPT>
  </head>
  <body>
    <?php
      include("menusuperior.php");
    ?>

    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <?php
      //insere menu lateral esquerdo na pagina
        include("menuesquerdo.php");
      ?>


  </div>
</aside>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-user">Novo Usuário</h1>
<?php
  if($_SESSION['acesso']==1){
?>
      <form action="" class="ls-form row" data-ls-module="form" method="post">
  <fieldset id="fields-disabled" class="row ls-form-disable ls-form-text">
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" value="" placeholder="Nome e sobrenome" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">E-mail</b>
      <input type="text" name="email" value="" placeholder="email" class="ls-field" required>
    </label>

    <fieldset>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="password_field" name="password" value="<?php echo $senhapura ?>" >
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#">
          </a>
      </div>
    </label>
  </fieldset>
    
  </fieldset>
  <div class="ls-actions-btn">
    <button class="ls-btn-primary hidden-elements" data-toggle-class="ls-display-none"  data-target=".hidden-elements" data-ls-fields-enable="#fields-disabled">Editar campos</button>
    <button class="ls-btn-primary ls-display-none hidden-elements" name="salva" type="submit">Salvar</button>
    <button data-toggle-class="ls-display-none"  data-target=".hidden-elements" data-ls-fields-enable="#fields-disabled" class="ls-btn-danger ls-display-none hidden-elements" type="submit">Cancelar</button>
  </div>
</form>
<?php
}else{
  echo "Você não tem permissão para acessar esta página.";
}
?>

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
    <script src="http://assets.locaweb.com.br/locastyle/3.8.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
