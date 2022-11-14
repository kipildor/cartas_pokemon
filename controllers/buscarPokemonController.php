<?php

class BuscarPokemonController{
    
    function __construct(){
        
        require_once("views/buscarPokemon/index.php");
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}

?>