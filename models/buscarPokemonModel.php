<?php
require_once('models/Pokemon.php');
require_once('models/Tipo.php');
    class BuscarPokemonModel{
        public $pokemon;
        //public $nombre;//test
        function __construct(){
            require_once("config/config.php");
            $this->pokemon = new Pokemon();
            //$this->tipos[] = new Tipo();
        }

        function buscarP($poke){
            $cadena_a_buscar = $poke;
            if(empty($cadena_a_buscar)){
                $cadena_a_buscar = rand(1, CANT_POKE);
            }
            //echo $cadena_a_buscar;
            $data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon/' . $cadena_a_buscar . '/'), true );
            
            $numero = $data['id'];
            $nombre = $data['name'];
            $hp = 0;
            $urlImagen = $data['sprites']['other']['official-artwork']['front_default'];
            
            //$estadisticas = $data['stats']
            foreach($data['stats'] as $fila){
                if($fila['stat']['name'] == 'hp'){
                    $hp = $fila['base_stat'];
                }
            }
            /*
            $this->nombreAtaque_1 = $data['name'];
            $this->descripcionAtaque_1 = $data['name'];
            $this->nombreAtaque_2 = $data['name'];
            $this->descripcionAtaque_2 = $data['name'];
            $this->tipo = $data['name'];
            */

            $this->pokemon->setNombre($nombre);
            $this->pokemon->setIdPokemon($numero);
            $this->pokemon->setHp($hp);
            $this->pokemon->setUrlImg($urlImagen);
            //$this->pokemon = new Pokemon($numero, $nombre, 0, $urlImagen);
            
            foreach($data['types'] as $fila){
                $tipo = new Tipo();
                $tipo = $this->pokemon->cargarTipos($fila['type']['name']);
                //array_push($this->pokemon->tipos, $tipo);
                $this->pokemon->addTipos($tipo);
            }
        /*
            $tipo = new Tipo();
            $tipo->setDescripcion('Lucha');
            $tipo->setIdTipo(2);
            $tipo->setUrlImgTipo('/views/images/tipo_lucha.png');
            $this->pokemon->addTipos($tipo);
        */
            return $this->pokemon;
        }
    }

?>