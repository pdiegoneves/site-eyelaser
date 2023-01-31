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
            <li class="paciente-menu-topo-link"><a href="#">home</a></li>
            <li class="paciente-menu-topo-link"><a href="#">quem somos</a></li>
            <li class="paciente-menu-topo-link"><a href="#especialidades">especialidade</a></li>
            <li class="paciente-menu-topo-link"><a href="#">convênios</a></li>
            <li class="paciente-menu-topo-link"><a href="#">contatos</a></li>
        </ul>
    </nav>
</header>
<main class='paciente-main'>
<section class="dobra hero">
    <div class="banner">
        <img src="<?=BASEURL?>assets/images/banner/cc.png" id='cc' alt="">
        <img src="<?=BASEURL?>assets/images/banner/modelo.png" id='modelo' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_branco.png" id='raios_branco' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_roxo.png" id='raios_roxo' alt="">
        <img src="<?=BASEURL?>assets/images/banner/raios_verde.png" id='raios_verde' alt="">
        <img src="<?=BASEURL?>assets/images/banner/meia_elipse.png" id='meia_elipse' alt="">
        <h2>Seu<br>mundo<br>com um<br>novo<br>olhar</h2>
    </div>
    <div class="cards" id='especialidades'>
        <article class="card" id='cirurgia-refrativa'>
            <div class="card-front">
                <img src="<?=BASEURL?>assets/images/cards/avatar-refrativa.png" alt="" class="avatar">
                <h2>Cirurgias<br>Refrativas</h2>
                <p class="card-text">São procedimentos cirúrgicos que visam a mudanção da refração dos olhos, resultando na correção dos vícios de refração.</p>
            </div>
        </article>
        <article class="card" id='ceratocone'>
            <div class="card-front">
                <img src="<?=BASEURL?>assets/images/cards/avatar-ceratocone.png" alt="" class="avatar">
                <h2>ceratocone</h2>
                <p class="card-text">Trata-se de uma doença ocular que altera a espessura e o formato da córnea, provocando uma distorção nas
                    imagens que chegam ao olho.</p>
            </div>
        </article>
        <article class="card" id='olho-seco'>
            <div class="card-front">
                <img src="<?=BASEURL?>assets/images/cards/avatar-olho-seco.png" alt="" class="avatar">
                <h2>Síndrome do olho seco</h2>
                <p class="card-text">Síndrome de ressecamento do olho causado pela redução da produção ou alteração da composição das lágrimas
                (filme lacrimal) pelas glândulas lacrimais.</p>
            </div>
        </article>
    </div>
    </section>
    <section class="dobra">
        <div class="cta1 superior">
            <h2>Cansado de depender de lentes para enxergar a vida com nitidez?</h2>
            <img class='img-cta1' src="<?=BASEURL?>assets/images/suite_refrativa.png" alt="">
        </div>
        <div class="cta1 inferior">
            <h2>O EyeLaser é o único local em Alagoas que realiza cirurgia refrativa à laser.</h2>
            <div class="text-complementar">
                <p>Nossa Suíte Refrativa é o que há de mais moderno em todo o planeta.</p>
                <p>Altíssimo nível de segurança e precisão, com excelentes resultados.</p>
            </div>
        </div>
    </section>

</main>

</div>

<?php
    require_once('src/includes/footer.php');
?>