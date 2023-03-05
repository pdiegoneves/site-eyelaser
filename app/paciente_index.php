<?php
  require_once('src/includes/head.php')
?>
<div class="pg-paciente">
  <header class="paciente_topo">
    <picture class="logo">
      <source media="(max-width: 768px)" srcset="<?=BASEURL?>assets/images/logo/logo_desk.png" />
      <source media="(max-width: 768px)" srcset="<?=BASEURL?>assets/images/logo/logo_tab.png" />
      <img src="<?=BASEURL?>assets/images/logo/logo_mob.png" alt="Logomarca eyelaser center">
    </picture>
    <nav class='paciente-menu-topo'>
      <ul>
        <li class="paciente-menu-topo-link"><a href="#">home</a></li>
        <li class="paciente-menu-topo-link"><a href="#especialidades">especialidade</a></li>
        <li class="paciente-menu-topo-link"><a href="#institucional">quem somos</a></li>
        <li class="paciente-menu-topo-link"><a href="#">convênios</a></li>
        <li class="paciente-menu-topo-link"><a href="#">contatos</a></li>
      </ul>
    </nav>
  </header>
  <main class='paciente-main'>
    <section class="dobra hero">
      <div class="hero-banner">
        <img class="hero-banner-cc" src="<?=BASEURL?>assets/images/banner/pacientes/cc.png" alt="">
        <img class="hero-banner-elipse" src="<?=BASEURL?>assets/images/banner/pacientes/elipse.png" alt="">
        <img class="hero-banner-modelo" src="<?=BASEURL?>assets/images/banner/pacientes/modelo.png" alt="">
        <img class="hero-banner-raio-branco" src="<?=BASEURL?>assets/images/banner/pacientes/raio-branco.png" alt="">
        <img class="hero-banner-raio-roxo" src="<?=BASEURL?>assets/images/banner/pacientes/raio-roxo.png" alt="">
        <img class="hero-banner-raio-verde" src="<?=BASEURL?>assets/images/banner/pacientes/raio-verde.png" alt="">
      </div>
    </section>
    <section class="dobra">

    <section class="dobra institucional">
    <span class="identificador" id='institucional'></span>

    </section>
    <section class="dobra depoimentos">
    <span class="identificador" id='depoimentos'></span>
    </section>

  </main>

</div>

<?php
    require_once('src/includes/footer.php');
?>
