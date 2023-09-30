<?php
// Definir a página atual
$current_page = basename($_SERVER['PHP_SELF']);

// Função para adicionar a classe "ativo" se a página atual for correspondente
function echoActiveClass($page_name)
{
    global $current_page;
    if ($current_page == $page_name) {
        echo 'class="ativo"';
    }
}
?>
<!--cabeçalho-->
<header>
        <a href="contato.php"  class="topo-btn" title="Formulário">Contratar</a>
        <h1>Logo</h1>

        <div id="menu" class="menu-mobile">
          <ul>
            <li class="menu-item">
              <a href="index.php" class="menu-link" title="Início">Início</a>
            </li>
            <li class="menu-item">
              <a href="servicos.php" class="menu-link" title="Serviços">Serviços</a>
            </li>
            <li class="menu-item">
              <a href="sobre.php" class="menu-link" title="Sobre">Sobre</a>
            </li>
            <li class="menu-item">
              <a href="contato.php" class="menu-link" title="Contato">Contato</a>
            </li>
          </ul>
          <div class="topo-rede-social">
            <a href="#" title="LinkedIn">LinkedIn</a>
            <a href="#" title="WhatsApp">WhatsApp</a>
            <a href="#" title="Instagram">Instagram</a>
            <a href="#" title="Instagram">Login</a>
          </div>
        </div>

        <div class="mobile-menu-icon">
          <button onclick="menuShow(); toggleMenu()">
            <img class="icon-menu" src="img/menu/btn-abrirmenu.svg" alt="" />
          </button>
        </div>
        <nav class="nav-menu">
          <ul>
            <li class="menu-item">
              <a href="index.php" <?php echoActiveClass('index.php'); ?> class="menu-link" title="Início">Início</a>
            </li>
            <li class="menu-item">
              <a href="servicos.php" <?php echoActiveClass('servicos.php'); ?>class="menu-link" title="Serviços">Serviços</a>
            </li>
            <li class="menu-item">
              <a href="sobre.php" <?php echoActiveClass('sobre.php'); ?> class="menu-link" title="Sobre">Sobre</a>
            </li>
            <li class="menu-item">
              <a href="contato.php" <?php echoActiveClass('contato.php'); ?> class="menu-link" title="Contato">Contato</a>
            </li>
          </ul>
          <div class="topo-rede-social">
            <a href="#" title="LinkedIn">LinkedIn</a>
            <a href="#" title="WhatsApp">WhatsApp</a>
            <a href="#" title="Instagram">Instagram</a>
            <a href="#" title="Login">Login</a>
          </div>
          
        </nav>
       
      </header>