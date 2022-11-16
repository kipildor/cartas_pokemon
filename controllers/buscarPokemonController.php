<?php
require_once('models/Pokemon.php');
class BuscarPokemonController{
    //public $poke;
    public $numero;
    public $nombre;
    public $hp;
    public $urlImagen;
    public $nombreAtaque_1;
    public $descripcionAtaque_1;
    public $nombreAtaque_2;
    public $descripcionAtaque_2;
    public $tipo;

    function __construct(){
        require_once("config/config.php");
        require_once("views/buscarPokemon/index.php");
        
        //$this->buscar();
    }

    function buscar(){
        $cadena_a_buscar = $_POST['poke'];
        if(empty($cadena_a_buscar)){
            $cadena_a_buscar = rand(1, CANT_POKE);
        }
        //echo $cadena_a_buscar;
        $data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon/' . $cadena_a_buscar . '/'), true );
        echo $data['name'] . ' *** ' ;
        /*var_dump($data);*/
        //$this->poke = new Pokemon();
        /* */
        $this->numero = $data['id'];
        $this->nombre = $data['name'];
        //$this->hp = $data['name'];
        $this->urlImagen = $data['sprites']['other']['official-artwork']['front_default'];
        
        /*
        $this->nombreAtaque_1 = $data['name'];
        $this->descripcionAtaque_1 = $data['name'];
        $this->nombreAtaque_2 = $data['name'];
        $this->descripcionAtaque_2 = $data['name'];
        $this->tipo = $data['name'];
        */
    }
}

?>