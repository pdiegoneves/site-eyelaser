<?php
    require_once('src/includes/head.php')
?>
<div class="pg-paciente">

<header class="paciente_topo">
    <picture>
        <source media="(max-width: 768px)" srcset="<?=BASEURL?>assets/images/logo_mobile.png" />
        <source media="(min-width: 769px)" srcset="<?=BASEURL?>assets/images/logo.png" />
        <img src="<?=BASEURL?>assets/images/logo.png" alt="Logomarca eyelaser center">
    </picture>
    <nav class='paciente-menu-topo'>
        <ul>
            <li class="paciente-menu-topo-link">home</li>
            <li class="paciente-menu-topo-link">quem somos</li>
            <li class="paciente-menu-topo-link">especialidade</li>
            <li class="paciente-menu-topo-link">convênios</li>
            <li class="paciente-menu-topo-link">contatos</li>
        </ul>
    </nav>
</header>
<main>
    <div class="banner">
        <img src="<?=BASEURL?>assets/images/banner/cc.png" id='cc' alt="">
        <img src="<?=BASEURL?>assets/images/banner/modelo.png" id='modelo' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_branco.png" id='raios_branco' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_roxo.png" id='raios_roxo' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_verde.png" id='raios_verde' alt="">
        <img src="<?=BASEURL?>assets/images/banner/meia_elipse.png" id='meia_elipse' alt="">
        <h2>Seu<br>mundo<br>com um<br>novo<br>olhar</h2>
    </div>
    <div class="cards">
        <article class="card" id='cirurgia-refrativa'>
            <img src="<?=BASEURL?>assets/images/cards/avatar-refrativa.png" alt="" class="avatar">
            <img src="<?=BASEURL?>assets/images/cards/bg-refrativa.jpg" class='backgroundImage' alt="">
            <h2>Cirurgias<br>Refrativas</h2>
            <p>São procedimentos cirúrgicos que visam a mudanção da refração dos olhos, resultando na correção dos
                vícios de
                refração.</p>
        </article>
        <article class="card" id='ceratocone'>
            <img src="<?=BASEURL?>assets/images/cards/avatar-ceratocone.png" alt="" class="avatar">
            <img src="<?=BASEURL?>assets/images/cards/bg-ceratocone.jpg" class='backgroundImage' alt="">
            <h2>ceratocone</h2>
            <p>Trata-se de uma doença ocular que altera a espessura e o formato da córnea, provocando uma distorção nas
                imagens que chegam ao olho.</p>
        </article>
        <article class="card" id='olho-seco'>
            <img src="<?=BASEURL?>assets/images/cards/avatar-olho-seco.png" alt="" class="avatar">
            <img src="<?=BASEURL?>assets/images/cards/bg-olho-seco.jpg" class='backgroundImage' alt="">
            <h2>Síndrome do<br>olho seco</h2>
            <p>Síndrome de ressecamento do olho causado pela redução da produção ou alteração da composição das lágrimas
                (filme lacrimal) pelas glândulas lacrimais.</p>
        </article>
    </div>
</main>

</div>

<?php
    require_once('src/includes/footer.php');
?>