<?php
require 'class/page.php';
$pagina = new Page();
$pagina->showPaginaHead();

?>
<header>
	<div id="inter-header">
	 <h1><?php echo $pagina->tituloPagina('Criando páginas com o PHP'); ?></h1>
	 <h4><?php echo $pagina->subTituloPagina('Aprendendo a usar métodos mágicos.'); ?></h4>
    </div>
</header>
<nav><?php echo $pagina->showMenu(); ?></nav>


