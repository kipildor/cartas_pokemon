<?php

define('URL', 'http://localhost/cartas_pokemon/');
/*
define('HOST', 'localhost');
define('DB', 'poke');
define('USER', 'root');
define('PASSWORD', "");
define('CHARSET', 'utf8mb4');
*/

/*
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'pokeDB');
    define('BASE_URL', 'http://localhost/poke03/');

    function getDB(){
        $dbhost=DB_SERVER;
        $dbuser=DB_USERNAME;
        $dbpass=DB_PASSWORD;
        $dbname=DB_DATABASE;

        try{
            $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $dbConnection -> exec("set names utf8");
            $dbConnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbConnection;
        }catch(PDOException $e){
            echo 'Error en la conexión: '.$e->getMessage();
        }


    }
*/
?>