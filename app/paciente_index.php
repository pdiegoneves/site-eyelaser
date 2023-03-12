<?php
  require_once('src/includes/head.php')
?>
<div class="pg-paciente">
  <header class="paciente_topo">
    <picture class="logo">
      <source media="(min-width: 1024)" srcset="<?=BASEURL?>assets/images/logo/logo_desk.png" />
      <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/logo/logo_tab.png" />
      <img src="<?=BASEURL?>assets/images/logo/logo_mob.png" alt="Logomarca eyelaser center">
    </picture>
    <nav class='paciente-menu-topo'>
      <ul>
        <li class="paciente-menu-topo-link"><a href="#">home</a></li>
        <li class="paciente-menu-topo-link"><a href="#especialidades">especialidades</a></li>
        <li class="paciente-menu-topo-link"><a href="#institucional">quem somos</a></li>
        <li class="paciente-menu-topo-link"><a href="#">convênios</a></li>
        <li class="paciente-menu-topo-link"><a href="#">contatos</a></li>
      </ul>
    </nav>
  </header>
  <main class='paciente-main'>
    <section class="dobra hero">
      <div class="hero-banner">
        <h2 class="hero-banner-title">
          <span class="bold">seu<br>mundo</span><br>
          <span class="semi-bold">com um</span><br>
          <span class="extra-bold">novo<br>olhar</span>
        </h2>
        <img class="hero-banner-cc" src="<?=BASEURL?>assets/images/banner/pacientes/cc.png" alt="">
        <img class="hero-banner-elipse" src="<?=BASEURL?>assets/images/banner/pacientes/elipse.png" alt="">
        <img class="hero-banner-modelo" src="<?=BASEURL?>assets/images/banner/pacientes/modelo.png" alt="">
        <img class="hero-banner-raio-branco" src="<?=BASEURL?>assets/images/banner/pacientes/raio-branco.png" alt="">
        <img class="hero-banner-raio-roxo" src="<?=BASEURL?>assets/images/banner/pacientes/raio-roxo.png" alt="">
        <img class="hero-banner-raio-verde" src="<?=BASEURL?>assets/images/banner/pacientes/raio-verde.png" alt="">
      </div>
    </section>
    <section class="dobra">
    <span class="identificador" id='especialidades'></span>
    <div class="grid-especialidades">
      <div class="grid-item-especialidade refrativa">
        <img src="<?=BASEURL?>assets/images/especialidades/avatar-refrativa.png" alt="Cirurgia Refrativa" class="grid-item-especialidade-avatar">
        <h3 class="grid-item-especialidade-title">Cirurgias Refrativas</h3>
        <p class="grid-item-especialidade-text">São procedimentos cirúrgicos que visam a mudança da refração dos olhos, resultando na correção dos vícios de refração.</p>
      </div>
      <div class="grid-item-especialidade ceratocone">
        <img src="<?=BASEURL?>assets/images/especialidades/avatar-ceratocone.png" alt="" class="grid-item-especialidade-avatar">
        <h3 class="grid-item-especialidade-title">Ceratocone</h3>
        <p class="grid-item-especialidade-text">Trata-se de uma doença ocular que altera a espessura e o formato da córnea, provocando uma distorção nas imagens que chegam ao olho.</p>
      </div>
      <div class="grid-item-especialidade olho-seco">
        <img src="<?=BASEURL?>assets/images/especialidades/avatar-olho-seco.png" alt="" class="grid-item-especialidade-avatar">
        <h3 class="grid-item-especialidade-title">Síndrome do Olho Seco</h3>
        <p class="grid-item-especialidade-text">Síndrome o ressecamento do olho causado pela redução da produção ou alteração da composição das lágrimas (filme lacrimal) pelas glândulas lacrimais.</p>
      </div>
    </div>
    <section class="dobra grid-cta-midle">
      <div class="grid-cta-midle-item text1"><p>Cansado de depender de lentes para enxergar a vida com nitidez?</p></div>
      <div class="grid-cta-midle-item image">
        <picture>
          <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/suiterefrativa/suite_refrativa_extra.png">
          <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/suiterefrativa/suite_refrativa_desk.png">
          <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/suiterefrativa/suite_refrativa_tab.png">
          <img src="<?=BASEURL?>assets/images/suiterefrativa/suite_refrativa_mob.png" alt="Suíte Refrativa">
        </picture>
      </div>
      <div class="grid-cta-midle-item text2"><p>O EyeLaser é o único local em Alagoas que realiza cirurgia refrativa à laser.</p></div>
      <div class="grid-cta-midle-item text3">
        <span>
          <p>Nossa Suíte Refrativa é que há de mais moderno em todo o planeta.</p>
          <p>Altíssimo nível de segurança e precisão, com excelentes resultados.</p>
        </span>
      </div>
    </section>
    <section class="dobra institucional">
    <span class="identificador" id='institucional'></span>
    <div class="grid-institucional">
      <div class="grid-institucional-item">
        <h3 class="grid-institucional-item-title">Quem Somos</h3>
        <div class="grid-institucinal-item-desc">
          <p>Localizados em Maceió, Alagoas, desde 2009, somos referência no Brasil e no mundo em cirurgias refrativas à laser.</p>
          <p>Oferecemos o que há de melhor em tecnologia e inovação para garantir a segurança e precisão em nossos procedimentos.</p>
          <p>Contamos com excelentes profissionais e uma equipe médica da mais alta expertise, visando também no atendimento humanizado.</p>
        </div>
      </div>
      <div class="grid-institucional-item">
        <h3 class="grid-institucional-item-title">Missão</h3>
        <div class="grid-institucinal-item-desc">
          <p>Oferecer o que hã de melhor em cirurgia refrativa (miopia, hipermetropia e astigmatismo), ceratocone e tratamento da síndrome do olho seco com segurança, humanização, tecnologia de ponta e inovação.</p>
        </div>
      </div>
      <div class="grid-institucional-item">
        <h3 class="grid-institucional-item-title">Visão</h3>
        <div class="grid-institucinal-item-desc">
          <p>Ser referência em tratamento ocular a laser com tecnologia de última geração.</p>
        </div>
      </div>
      <div class="grid-institucional-item">
        <h3 class="grid-institucional-item-title">Propósito</h3>
        <div class="grid-institucinal-item-desc">
          <p>Proporcionar segurança e atendimento de excelência a pacientes e ofatalmologistas através de um ambiente confortável, humanizado e com o que há de mais moderno em tecnologia.</p>
        </div>
      </div>
      <div class="grid-institucional-item valores">
        <h3 class="grid-institucional-item-title">Valores</h3>
        <div class="grid-institucinal-item-desc">
          <ul>
            <li>Desenvolvimento profissional;</li>
            <li>Valorizaçtão do ser humano (equipe e pacientes)</li>
            <li>Ética nas relações;</li>
            <li>Parcerias apoiadas em princípios.</li>
          </ul>
        </div>
      </div>
    </div>

    </section>
    <section class="dobra depoimentos">
    <span class="identificador" id='depoimentos'></span>
    <div class="depoimentos-container">
      <h2 class="depoimentos-title">Depoimentos</h2>
      <div class="card-depoimento">
        <div class="depoimentos-frase">Sempre ouvimos de nossos pacientes que realizar a cirurgia refrativa foi a melhor decisão de suas vidas. Isso nos deixa tão emocionados, que gostaríamos de compartilhar com você.</div>
        <div class="depoimentos-video">
          <img src="<?=BASEURL?>assets/images/depoimentos/player.png" alt="">
        </div>
      </div>
    </div>
    </section>

  </main>

</div>

<?php
    require_once('src/includes/footer.php');
?>
