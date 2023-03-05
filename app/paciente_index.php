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
        <li class="paciente-menu-topo-link"><a href="#institucional">quem somos</a></li>
        <li class="paciente-menu-topo-link"><a href="#especialidades">especialidade</a></li>
        <li class="paciente-menu-topo-link"><a href="#">convênios</a></li>
        <li class="paciente-menu-topo-link"><a href="#">contatos</a></li>
      </ul>
    </nav>
  </header>
  <main class='paciente-main'>
    <section class="dobra hero">

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
