<?php
    require_once('src/includes/head.php')
?>
<header>
    <div class="menu-area">
        <img id="logo" src="<?=BASEURL?>assets/images/logo_mobile.png" alt="Logo">
    </div>
</header>
<main class="main">
    <section class="cta-hero">
        <h3>Bem vinda(a) ao EyeLaser.</h3>
        <h3>Para prosseguir precisamos que nos confirme qual o seu perfil.</h3>
        <img class="icon" src="<?=BASEURL?>assets/images/perfil/setas.png" alt="">
    </section>
    <section class="selecao-perfis">
        <div class="perfil-card paciente perfil-hovered" id="link-paciente">
            <img src="<?=BASEURL?>assets/images/perfil/touch.png" alt="Icone de Toque" class="icon only_mobile">
            <img src="<?=BASEURL?>assets/images/perfil/click.png" alt="Icone de Toque" class="icon only_desktop">
            <h2 class="perfil-name">Sou Paciente</h2>
        </div>
        <div class="perfil-card medico" id="link-medico">
            <img src="<?=BASEURL?>assets/images/perfil/touch.png" alt="Icone de Toque" class="icon only_mobile">
            <h2 class="perfil-name">Sou Médico</h2>
        </div>
    </section>
</main>
<?php
    require_once('src/includes/footer.php');
?>
