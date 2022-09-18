<?php

include('url_response.php');
$urlpatterns = array(
    '/' => 'index.php',
    '/medico' => 'medico_index.php',
    '/paciente' => 'paciente_index.php'
);
url_response($urlpatterns);

?>