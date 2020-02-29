<!DOCTYPE html>
<?php 
//session_start();
include "conecta.php";
require("verificaselogado.php");
$usuid=$_SESSION['id'];
?>
        <?php
          if(isset($_POST['salva'])){
            $data= date("Y-m-d H:i:s");
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            //$senha=md5($_POST['senha']);
            $email=$_POST['email'];
            $acesso=$_POST['acesso'];
            //$ip=$_POST['ip'];
            $altera="UPDATE usuario SET usu_nome='$nome', usu_email='$email', usu_acesso='$acesso',usu_cadastro='$data', where usu_id='$id'";
            if (mysqli_query($link,$altera)) {

              $msg="<div class='ls-alert-success'><strong>Atenção:</strong>Usuário alterado com sucesso!!! </div>";
            //echo "<div class='ls-alert-success'><strong>Atenção:</strong>Usuário alterado com sucesso!!! </div>";
               header("location:usuarios.php?msg=$msg");
            } else {
              echo "Error updating record: " . mysqli_error($link);
            }
          }
          if(isset($_GET['excluir'])){
            $excluir="DELETE from usuario where usu_id=".$_GET['id'];
             if (mysqli_query($link,$excluir)) {

              $msg="<div class='ls-alert-success'><strong>Atenção:</strong>Usuário excluido com sucesso!!! </div>";
            //echo "<div class='ls-alert-success'><strong>Atenção:</strong>Usuário alterado com sucesso!!! </div>";
               header("location:usuarios.php?msg=$msg");
            } else {
              echo "Error updating record: " . mysqli_error($link);
            }
          }
          if(isset($_GET['editar'])){
            $consulta="select * from usuario where usu_id=".$_GET['id'];
            $query=mysqli_query($link, $consulta);
            $quantidade=mysqli_num_rows($query);
            $linha=mysqli_fetch_array($query);
            $id=$_GET['id'];
            $nome=$linha['usu_nome'];
            $email=$linha['usu_email'];
            $acesso=$linha['usu_acesso'];
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
        <h1 class="ls-title-intro ls-ico-user">Alterar Usuário</h1>

      <form action="" class="ls-form" data-ls-module="form" method="post">
  <fieldset id="fields-disabled" class="row ls-form-disable ls-form-text">
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Nome</b>
      <input type="text" name="nome" value="<?php if(isset($nome)){ echo $nome; } ?>" placeholder="Nome e sobrenome" class="ls-field" required>
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">E-mail</b>
      <input type="text" name="email" value="<?php if(isset($email)){ echo $email; } ?>" placeholder="email" class="ls-field" required>
    </label>
    <label class="ls-label col-md-2">
      <b class="ls-label-text">Acesso</b>
      <div class="ls-custom-select">
        <select class="ls-custom" name="acesso">
          <option value="1" <?php if((isset($acesso)) and ($acesso==1)){echo "selected='selected'";} ?>>1</option>
          <option value="2" <?php if((isset($acesso)) and ($acesso==2)){echo "selected='selected'";} ?>>2</option>
          <option value="3" <?php if((isset($acesso)) and ($acesso==3)){echo "selected='selected'";} ?>>3</option>
        </select>
      </div>
    </label>
    <input type="hidden" name="id" value="<?php if(isset($id)){ echo $id; } ?>">
  </fieldset>
  <div class="ls-actions-btn">
    <button class="ls-btn-primary hidden-elements" data-toggle-class="ls-display-none"  data-target=".hidden-elements" data-ls-fields-enable="#fields-disabled">Editar campos</button>
    <button class="ls-btn-primary ls-display-none hidden-elements" name="salva" type="submit">Salvar</button>
    <button data-toggle-class="ls-display-none"  data-target=".hidden-elements" data-ls-fields-enable="#fields-disabled" class="ls-btn-danger ls-display-none hidden-elements" type="submit">Cancelar</button>
  </div>
</form>
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
