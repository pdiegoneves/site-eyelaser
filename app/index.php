<?php
    require_once('src/includes/head.php')
?>
<main class="main">
    <section class="selecao-perfis">
        <div id="link-paciente" class="link-perfil"></div>
        <div class="perfil-card paciente">
          <picture class="img-perfil-card">
            <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-paciente_extra.png">
            <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-paciente_desk.png">
            <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-paciente_tab.png">
            <img id="perfil-paciente" src="<?=BASEURL?>assets/images/perfil/perfil-paciente_mob.png" alt="Sou um Paciente" title="Sou um(a) Paciente">
          </picture>
          <div class="perfil-info-paciente">
            <div class="arrow-left">
              <img src="<?=BASEURL?>assets/images/perfil/info/arrow-left.png" alt="sou um paciente">
              <div class="arrow-left-text">
                <p>Sou um(a)</p>
                <h3>Paciente</h3>
              </div>
           </div>
          </div>
        </div>
        <div class="cta-hero-perfis js-cta-perfis-entrada">
          <img id="logo" class="logo" src="<?=BASEURL?>assets/images/logo_sobre_nome.png" alt="Logo">
          <h3><b>Bem-Vindos</b> a um <b>novo Eyelaser</b></h3>
          <p><b>Nossa missão</b> é oferecer <b>o que há de melhor</b> em <b>cirurgia refrativa</b>, tratamento de <b>ceratocone</b> e da síndrome do <b>olho seco</b>, com profissionalismo, segurança, humanização, <b>tecnologia de ponta</b> e inovação.</p>
          <p>
            <span class="text-cta-hero">
              <span class="text-cta-hero-padrao">Qual o Seu perfil?</span>
              <span class="text-cta-hero-paciente is-hidden">Tratamentos personalizados, seguros e eficazes para as necessidades de seus olhos.</span>
              <span class="text-cta-hero-medico is-hidden">Junte-se a uma equipe de especialistas comprometidos com a excelência.</span>
            </span>
          </p>
        </div>
        <div id="link-medico" class="link-perfil"></div>
        <div class="perfil-card medico" >
          <picture class="img-perfil-card">
              <source media="(min-width: 1300px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-medico_extra.png">
              <source media="(min-width: 1024px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-medico_desk.png">
              <source media="(min-width: 768px)" srcset="<?=BASEURL?>assets/images/perfil/perfil-medico_tab.png">
              <img id="perfil-medico" src="<?=BASEURL?>assets/images/perfil/perfil-medico_mob.png" alt="Sou um Paciente" title="Sou um(a) Paciente">
          </picture>
          <div class="perfil-info-medico">
            <div class="arrow-right">
              <img src="<?=BASEURL?>assets/images/perfil/info/arrow-right.png" alt="sou Oftalmo">
              <div class="arrow-right-text">
                <p>Sou um(a)</p>
                <h3>Oftalmo</h3>
              </div>
           </div>
          </div>
        </div>
    </section>
</main>
</div>
<script src='<?=BASEURL?>src/js/index.js'></script>

<?php
    require_once('src/includes/footer.php');
?>
