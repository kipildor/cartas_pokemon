<?php
    $base = __DIR__;
    define('URL_BASE', $base);
    
    
    require_once URL_BASE.'/libs/app.php';
    $vista = new App();
    
    $vista->prueba();
?>