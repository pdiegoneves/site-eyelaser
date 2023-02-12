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
            <li class="paciente-menu-topo-link"><a href="#institucional">quem somos</a></li>
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
    <div class="cards">
        <span class="identificador" id='especialidades'></span>
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
    <section class="dobra institucional">
    <span class="identificador" id='institucional'></span>
    <div class="grid">
        <div class="institucional-item quem-somos">
            <h2 class="institucional-item-title">Quem Somos</h2>
            <div class="institucional-item-text">
                <p>Localizada em Maceió, Alagoas, desde 2009, somos referência no Brasil e no mundo em cirurgias refrativas a laser.</p>
                <p>Oferecemos o que há de melhor em tecnologia e inovação para garantir a segurança e precisão em nossos procedimentos.</p>
                <p>Contamos com excelentes profissionais e uma equipe médica da mais alta expertise, visando também no atendimento humanizado.</p>
            </div>
        </div>
        <div class="institucional-item missao">
            <h2 class="institucional-item-title">Missão</h2>
            <div class="institucional-item-text">
                <p>Oferecer o que há de melhor em cirurgia refrativa (miopia, hipermetropia e astigmatismo), ceratocone e tratamento da síndrome do olho seco com segurança humanização, tecnologia de ponta e inovação.</p>
            </div>
        </div>
        <div class="institucional-item visao">
            <h2 class="institucional-item-title">Visão</h2>
            <div class="institucional-item-text">
                <p>Ser referência em tratamento ocular a laser com tecnologia de última geração.
                </p>
            </div>
        </div>
        <div class="institucional-item proposito">
            <h2 class="institucional-item-title">Propósito</h2>
            <div class="institucional-item-text">
                <p>Proporcionar segurança e atendimento de excelência a pacientes e oftalmologistas através de um ambiente confortável, humanizado e com o que há de mais moderno em tecnologia.</p>
            </div>
        </div>
        <div class="institucional-item valores">
            <h2 class="institucional-item-title">Valores</h2>
            <ul class="institucional-item-text">
              <li>Desenvolvimento profissional;</li>
              <li>Valorização do ser humanto (equipe e pacientes);</li>
              <li>Ética nas relações;</li>
              <li>Parcerias apoiadas em princípios.</li>
            </ul>
        </div>
    </div>
  </section>
    <section class="dobra">
    <span class="identificador" id='depoimentos'></span>

    </section>
    <section class="dobra">
    <span class="identificador" id='faq'></span>

    </section>

</main>

</div>

<?php
    require_once('src/includes/footer.php');
?>