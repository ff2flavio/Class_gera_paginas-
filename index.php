<?php
require 'class/page.php';
$pagina = new Page();
$pagina->showPaginaHead();

$postagem1 = new Postagem();
$postagem1->titulo = "Brasileiros e os aplicativos";
$postagem1->texto = "Olhar Digital é um programa de televisão brasileiro produzido pela Lumiar Filmes e exibido pela RedeTV! todos os domingos. é apresentado por Marisa Silva e narrado por Delphis Fonseca. Atualmente o programa vai ao ar sob o nome de Olhar Digital Plus [+] pelo AXN e pela Sony.1
Tem em sua pauta focada em tecnologia. Novas tendências mercadológicas, como celulares, notebooks, serviços de internet, como web 2.0, Wireless, além de outros assuntos como televisão digital e Trend Makers são tratados pelo programa.2 3 O programa tem focado também em seu portal de internet, onde disponibiliza vídeos exclusivos e notícias sobre tecnologia.";

$postagem2 = new Postagem();
$postagem2->titulo = "Brasileiros e os aplicativos";
$postagem2->texto = "Olhar Digital é um programa de televisão brasileiro produzido pela Lumiar Filmes e exibido pela RedeTV! todos os domingos. é apresentado por Marisa Silva e narrado por Delphis Fonseca. Atualmente o programa vai ao ar sob o nome de Olhar Digital Plus [+] pelo AXN e pela Sony.1

Tem em sua pauta focada em tecnologia. Novas tendências mercadológicas, como celulares, notebooks, serviços de internet, como web 2.0, Wireless, além de outros assuntos como televisão digital e Trend Makers são tratados pelo programa.2 3 O programa tem focado também em seu portal de internet, onde disponibiliza vídeos exclusivos e notícias sobre tecnologia.";


$postagem3 = new PostagemComImagem();
$postagem3->titulo = "Brasileiros e os aplicativos";
$postagem3->texto = "Olhar Digital é um programa de televisão brasileiro produzido pela Lumiar Filmes e exibido pela RedeTV! todos os domingos. é apresentado por Marisa Silva e narrado por Delphis Fonseca. Atualmente o programa vai ao ar sob o nome de Olhar Digital Plus [+] pelo AXN e pela Sony.1
Tem em sua pauta focada em tecnologia. Novas tendências mercadológicas, como celulares, notebooks, serviços de internet, como web 2.0, Wireless, além de outros assuntos como televisão digital e Trend Makers são tratados pelo programa.2 3 O programa tem focado também em seu portal de internet, onde disponibiliza vídeos exclusivos e notícias sobre tecnologia.";
$postagem3->imagem = "http://portalintegracao.com/portal/wp-content/uploads/2013/03/NOT-celulares-xing-ling-deixarao-de-funcionar-em-2014-entenda1362657144_460_322.jpg";


?>
<header>
	<div id="inter-header">
	 <h1><?php echo $pagina->tituloPagina('Criando páginas com o PHP'); ?></h1>
	 <h4><?php echo $pagina->subTituloPagina('Aprendendo a usar métodos mágicos.'); ?></h4>
    </div>
</header>
<nav><?php echo $pagina->showMenu(); ?></nav>

<article class="postagem">
<h2><?php echo $postagem1->titulo; ?></h2>
<p><?php echo $postagem1->texto; ?></p>

<h2><?php echo $postagem2->titulo; ?></h2>
<p><?php echo $postagem2->texto; ?></p>

<h2><?php echo $postagem3->titulo; ?></h2>
<p><img class="thumg" src="<?php echo $postagem3->imagem; ?>">
</img><?php echo $postagem3->texto; ?></p>

</article>
