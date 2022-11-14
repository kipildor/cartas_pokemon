<?php
    $base = __DIR__;
    define('URL_BASE', $base);
    
    require_once(__DIR__ . '/config/config.php');
    //$asd = (__DIR__ . '/config/config.php');
    //echo $asd;
    require_once(__DIR__ . '/router.php');

    $router = new Router();
    $router->run();
    
    //require_once URL_BASE.'/libs/app.php';
    //$vista = new App();
    
    //$vista->prueba();

    echo 'estoy en el index de la raiz';
?>