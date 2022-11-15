<?php

class BuscarPokemonController{
    
    function __construct(){
        require_once("config/config.php");
        //require_once("views/buscarPokemon/index.php");
    }

    function buscar(){
        $cadena_a_buscar = $_POST['poke'];
        if(empty($cadena_a_buscar)){
            $cadena_a_buscar = rand(1, CANT_POKE);
        }
        //echo $cadena_a_buscar;
        $data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon/' . $cadena_a_buscar . '/'), true );
        echo $data['name'] . ' *** ' ;
    }
}

?>