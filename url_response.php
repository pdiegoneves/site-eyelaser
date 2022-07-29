<?php

if(!defined('PROJECT_DIR'))
    define('PROJECT_DIR', 'eyelasercenter');

if(!defined('APP_DIR'))
    define('APP_DIR', 'app');

if(!defined('REQUEST_URI'))
    define('REQUEST_URI', str_replace('/'.PROJECT_DIR,'',$_SERVER['REQUEST_URI']));



/**
 * Função Resposável pelo tratamento da URL
 *
 * @author Camilo Teixeira de Melo
 * @link http://www.camilotx.com.br
 * @param string $urlpatterns array com os modelos de url
 * @return void
 **/

function url_response($urlpatterns){
    foreach($urlpatterns as $pcre=>$app){
        if(preg_match("@^{$pcre}$@",REQUEST_URI,$_GET)){
                include(APP_DIR.'/'.$app);
                exit();
        }else{
            $msg = '<h1>404 Página não existe</h1>';
        }
    }
    echo $msg;
return;		
}


?>