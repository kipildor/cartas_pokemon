<?php
    require_once('models/Pokemon.php');
    require_once('models/buscarPokemonModel.php');
    class BuscarPokemonController{
        //public $cadena;
        //public $pokemon = new Pokemon();
        public $nombre;//test
    
        function __construct(){
            require_once("config/config.php");
                        
            $cadena = $this->queBusco();

            $pok = new BuscarPokemonModel();

            $pokemonRecibido = new Pokemon();
            $pokemonRecibido = $pok->buscarP($cadena);
            
            $this->nombre = $pokemonRecibido->getNombre();
            $nombre2 = $pokemonRecibido->getNombre();
            require_once("views/buscarPokemon/index.php");
            //$this->cadena = $_POST['poke'];
            
        }

        function queBusco(){
            $aBuscar = '';
            if(isset($_POST['poke'])){
                $aBuscar = $_POST['poke'];
            }else{
                $aBuscar = rand(1, CANT_POKE);
            }
            
            return $aBuscar;
            //$buscarPoke = new BuscarPokemonModel();
            //$this->pokemon = $buscarPoke->buscarP($this->cadena);

            //require_once("views/buscarPokemon/index.php");
        }
    }

?>