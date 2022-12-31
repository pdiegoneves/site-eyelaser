<?php
    require_once('src/includes/head.php')
?>
<header>
    <div class="logo-area">
        <img src="<?=BASEURL?>assets/images/logo_mobile.png" alt="Logo">
    </div>
</header>
<main class="main">
    <section class="cta-hero">
        <h3>Bem vinda(a) ao EyeLaser.</h3>
        <h3>Para prosseguir precisamos que nos confirme qual o seu perfil.</h3>
        <img class="icon" src="<?=BASEURL?>assets/images/perfil/setas.png" alt="">
    </section>
    <section class="selecao-perfis">
        <div class="perfil-card paciente">
            <img src="<?=BASEURL?>assets/images/perfil/touch.png" alt="Icone de Toque" class="icon">
            <h2 class="perfil-name">Sou Paciente</h2>
        </div>
        <div class="perfil-card medico">
            <img src="<?=BASEURL?>assets/images/perfil/perfil-doutor.png" alt="Acessar Área do Médico">
            <img src="<?=BASEURL?>assets/images/perfil/touch.png" alt="Icone de Toque" class="icon">
            <h2 class="perfil-name">Sou Médico</h2>
        </div>
    </section>

    <div class="container">
        <section class="link medico"></section>
        <section class="link paciente"></section>
    </div>
</main>
<?php
    $index = true;
    require_once('src/includes/footer.php');
?>
