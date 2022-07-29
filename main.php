<?php

include('url_response.php');
$urlpatterns = array(
    '/' => 'index.php',
    '/medico' => 'medico.php',
    '/paciente' => 'paciente.php',
    '/teste' => 'app/assets/images/banner-medico-mob.webp'
    // '/noticias' => 'noticias.php',
    // '/noticias/(?P<id_noticia>\d+)'=>'noticias.php',
);
url_response($urlpatterns);

?>