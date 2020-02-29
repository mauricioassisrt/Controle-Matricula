<nav class="ls-menu">
        <ul>
           <li><a href="/controle-matricula/admin/principal.php" class="ls-ico-dashboard" title="Dashboard">Inicio</a></li>
           <?php if(($_SESSION['acesso']==1) or ($_SESSION['acesso']==2)){ ?>
           <li><a href="/controle-matricula/admin/chamadas.php" class="ls-ico-users" title="chamada">Chamada</a></li>
           <li><a href="/controle-matricula/admin/matricula.php" class="ls-ico-users" title="matricula">Matricula</a></li>
           <li><a href="/controle-matricula/admin/confirmacao.php" class="ls-ico-users" title="confirmacao">Confirmação</a></li>
           <li><a href="/controle-matricula/admin/consulta_cpf.php" class="ls-ico-users" title="questionario">Questionario</a></li>
           <li><a href="/controle-matricula/admin/usuarios.php" class="ls-ico-users" title="usuarios">Usuarios</a></li>
           
           <?php }?>
            <a href="#" class="ls-ico-cog" title="relatorios">Relatórios</a>
            <ul>
              
            </ul>
          </li>
        </ul>
      </nav>