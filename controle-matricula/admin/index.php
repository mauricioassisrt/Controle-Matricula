<!DOCTYPE html>
<html class="ls-theme-blue">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Sistema de Gestão de Redações</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="http://200.201.19.32/vestibular_admin/static/admin/css/locastyle.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
<div class="ls-login-parent">


  <div class="ls-login-inner">
    <div class="ls-login-container">
      <div class="ls-login-box">
  <h1 class="ls-login-logo"><img title="Logo login" src="../assets/images/logo_sistema.png" /></h1>
  <?php 
    if (isset($_GET["msg"])){
        $msg=$_GET["msg"];
        echo "<div class='ls-alert-danger'><strong>Aten&ccedil;&atilde;o:</strong> $msg </div>";
    }
  ?>
  <form role="form" class="ls-form ls-login-form" action="verificaLogin.php?acao=logar" method="POST">
    <fieldset>


      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">Usuário</b>
        <input class="ls-login-bg-user ls-field-lg" type="text" placeholder="E-mail" name="campoEmail" required autofocus>
      </label>

      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">Senha</b>
        <div class="ls-prefix-group">
          <input id="password_field" class="ls-login-bg-password ls-field-lg" type="password" name="campoSenha" placeholder="Senha" required>
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
        </div>
      </label>

      <!-- <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p> -->

      <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">
      <p></p>

    </fieldset>
  </form>
</div>

    </div>
  </div>
</div>

    <script src="http://200.201.19.32/vestibular_admin/static/admin/js/jquery-2.0.3.min.js"></script>
    <script src="http://200.201.19.32/vestibular_admin/static/admin/js/locastyle.js"></script>

</body>
</html>
