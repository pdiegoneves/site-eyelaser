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
        <li class="paciente-menu-topo-link"><a href="#contatos">contatos</a></li>
      </ul>
    </nav>
  </header>
  <main class='paciente-main'>
    <section class="dobra hero">
      <div class="hero-banner">
        <h2 class="hero-banner-title refrativa">
          <span class="semi-bold">Você já<br>imaginou</span><br>
          <span class="extra-bold">sua vida</span><br>
          <span class="extra-bold">livre dos<br>óculos?</span>
        </h2>
        <img class="hero-banner-cc" src="<?=BASEURL?>assets/images/banner/pacientes/cc.png" alt="">
        <img class="hero-banner-elipse" src="<?=BASEURL?>assets/images/banner/pacientes/elipse.png" alt="">
        <img class="hero-banner-modelo" src="<?=BASEURL?>assets/images/banner/refrativa/modelo.png" alt="">
        <img class="hero-banner-raio-branco" src="<?=BASEURL?>assets/images/banner/pacientes/raio-branco.png" alt="">
        <img class="hero-banner-raio-roxo" src="<?=BASEURL?>assets/images/banner/pacientes/raio-roxo.png" alt="">
        <img class="hero-banner-raio-verde" src="<?=BASEURL?>assets/images/banner/pacientes/raio-verde.png" alt="">
      </div>
    </section>
    <section class="dobra refrativa">
      <span class="identificador" id='refrativa'></span>
      <span class="refrativa-initial-text">Você já conhece as</span>
      <h1 class="refrativas-title">Cirurgias Refrativa a Laser?</h1>

      <div class="refrativas-desc">
        <p>
          São procedimentos cirúrgicos que visam a mudança da refração dos olhos, resultando na correção dos vícios de refração.
        </p>
        <p>
          Tem altíssimo nível de segurança e precisão, excelentes resultados corrigindo miopia, hipermetropia, astigmatismo e presbiopia.
        </p>

      </div>
    </section>
    <section class="dobra vicios-de-refracao">
    <span class="identificador" id='vicios-de-refracao'></span>
    <h2 class="vicios-de-refracao-title">Você tem algum desses vícios de refração?</h2>
    <div class="grid-vicios-de-refracao">
    <div class="grid-item-vicios-de-refracao miopia">
      <picture class="grid-item-vicios-de-refracao-avatar">
          <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_miopia-extra.png">
          <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_miopia-desk.png">
          <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_miopia-tab.png">
          <img id="avatar-miopia" src="<?=BASEURL?>assets/images//refrativas/vicios_de_refracao_miopia-mob.png" alt="Miopia" title="Miopia">
        </picture>
        <h3 class="grid-item-vicios-de-refracao-title">Miopia</h3>
        <p class="grid-item-vicios-de-refracao-text">Os raios luminosos são focalizados antes da retina, tornando a imagem de objetos distantes borrada; é possível enxergar objetos próximos.</p>
      </div>
      <div class="grid-item-vicios-de-refracao hipermetropia">
        <picture class="grid-item-vicios-de-refracao-avatar">
          <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_hipermetropia-extra.png">
          <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_hipermetropia-desk.png">
          <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_hipermetropia-tab.png">
          <img id="avatar-hipermetropia" src="<?=BASEURL?>assets/images//refrativas/vicios_de_refracao_hipermetropia-mob.png" alt="Hipermetropia" title="Hipermetropia">
        </picture>
        <h3 class="grid-item-vicios-de-refracao-title">hipermetropia</h3>
        <p class="grid-item-vicios-de-refracao-text">Os raios luminosos são focalizados depois da retina tornando as imagens de objetos próximos borradas; é possível enxergar objetos distantes.</p>
      </div>
      <div class="grid-item-vicios-de-refracao astigmatismo">
        <picture class="grid-item-vicios-de-refracao-avatar">
          <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_astigmatismo-extra.png">
          <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_astigmatismo-desk.png">
          <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_astigmatismo-tab.png">
          <img id="avatar-astigmatismo" src="<?=BASEURL?>assets/images//refrativas/vicios_de_refracao_astigmatismo-mob.png" alt="Astigmatismo" title="Astigmatismo">
        </picture>
        <h3 class="grid-item-vicios-de-refracao-title">Astigmatismo</h3>
        <p class="grid-item-vicios-de-refracao-text">Os raios luminosos convergem para pontos focais distintos comprometendo a qualidade da visão, tanto de objetos distantes quanto próximos.</p>
      </div>
      <div class="grid-item-vicios-de-refracao presbiopia">
        <picture class="grid-item-vicios-de-refracao-avatar">
          <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_presbiopia-extra.png">
          <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_presbiopia-desk.png">
          <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/refrativas/vicios_de_refracao_presbiopia-tab.png">
          <img id="avatar-prebiopia" src="<?=BASEURL?>assets/images//refrativas/vicios_de_refracao_presbiopia-mob.png" alt="Presbiopia" title="Presbiopia">
        </picture>
        <h3 class="grid-item-vicios-de-refracao-title">Presbiopia</h3>
        <p class="grid-item-vicios-de-refracao-text">Condição visual que afeta a capacidade de focar objetos próximos, devido à perda de elasticidade do cristalino, comum em pessoas com mais de 40 anos.</p>
      </div>
    </div>
    </section>
    <section class="dobra beneficios">
    <span class="identificador" id='beneficios'></span>
    <div class="grid-beneficios">
      <div class='grid-beneficios-title'><span>Saiba quais os benefícios da</span><h3>Cirurgia Refrativa a Laser</h3></div>
      <div class="grid-beneficios-item">
        <h3 class="grid-beneficios-item-title">Correção dos<br>Problemas de Visão</h3>
        <div class="grid-beneficios-item-desc">
          <p>A cirurgia refrativa pode corrigir uma variedade de problemas de visão, incluindo miopia, hipermetropia, astigmatismo e presbiopia, permitindo que o paciente enxergue com mais clareza e nitidez.</p>
        </div>
      </div>
      <div class="grid-beneficios-item">
        <h3 class="grid-beneficios-item-title">Melhora na<br>Qualidade de Vida</h3>
        <div class="grid-beneficios-item-desc">
          <p>A correção da visão pode melhorar significativamente a qualidade de vida do paciente, permitindo que ele realize tarefas diárias sem depender de óculos ou lentes de contato.</p>
        </div>
      </div>
      <div class="grid-beneficios-item">
        <h3 class="grid-beneficios-item-title">Procedimento<br>seguro e eficaz</h3>
        <div class="grid-beneficios-item-desc">
          <p>As técnicas de cirurgia refrativa a laser são extremamente seguras e eficazes, com baiíxissimas taxas de complicações e excelentes resultados na correção de problemas de visão.</p>
        </div>
      </div>
      <div class="grid-beneficios-item">
        <h3 class="grid-beneficios-item-title">Rápida<br>recuperação</h3>
        <div class="grid-beneficios-item-desc">
          <p>A grande maioria dos pacientes pode retornar às atividades diárias normais dentro de alguns dias após a cirurgia refrativa, com poucas restrições.</p>
        </div>
      </div>

    </section>
    
<br><br><br><hr><br><br><br>

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
    <section class="dobra duvidas-frequentes">
    <span class="identificador" id='duvidas-frequentes'></span>
      <h2 class="duvidas-frequentes-title">
        Dúvidas Frequentes
      </h2>
      <div class="duvidas-frequentes-questions">
      <details class="question">
        <summary class="question-sumary">Epcot Center</summary>
        <p class="question-response">Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
      </details>
      <details class="question">
        <summary class="question-sumary">Epcot Center</summary>
        <p class="question-response">Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
      </details>
      </div>
    </section>
    
  </main>
  <footer class="dobra contatos">
      <span class="identificador" id='contatos'></span>
      <div class="grid-contatos">
        <div class="contatos-localizaca">
          <h3 class="contatos-localizacao-title">Como chegar</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.3156454710834!2d-35.71920374621664!3d-9.64902304060991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70145bde6e2222f%3A0x410df98722292f52!2sEYE%20LASER%20CENTER!5e0!3m2!1spt-BR!2sbr!4v1678643282292!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <button class='localizacao-zap'>Receber mapa por Whatsapp</button>
        </div>
        <nav class='contatos-menu'>
          <h3 class="contatos-menu-title">Menu</h3>
      <ul>
        <li class="contatos-menu-link"><a href="#">home</a></li>
        <li class="contatos-menu-link"><a href="#especialidades">especialidades</a></li>
        <li class="contatos-menu-link"><a href="#institucional">quem somos</a></li>
        <li class="contatos-menu-link"><a href="#">convênios</a></li>
        <li class="contatos-menu-link"><a href="#contatos">contatos</a></li>
      </ul>
    </nav>
        <div class="contatos-contatos">
        <h3 class="contatos-menu-title">Contatos</h3>

        </div>
      </div>
    </footer>
</div>

<?php
    require_once('src/includes/footer.php');
?>
