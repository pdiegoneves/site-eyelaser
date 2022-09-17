<?php

include('url_response.php');
$urlpatterns = array(
    '/' => 'index.php',
    '/medico' => 'medico.php',
    '/paciente' => 'paciente.php'
);
url_response($urlpatterns);

?>