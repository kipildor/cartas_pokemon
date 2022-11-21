<?php
require_once('models/Pokemon.php');
require_once('models/Tipo.php');
require_once('models/Ataque.php');
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
                        
            foreach($data['types'] as $fila){
                $tipo = new Tipo();
                $tipo = $this->pokemon->cargarTipos($fila['type']['name']);
            
                $this->pokemon->addTipos($tipo);
            }

            $contAtaque = 0;
            foreach($data['abilities'] as $filaAB){
                $contAtaque++;
                $ataque = new Ataque();
                $ataque->setNombre($filaAB['ability']['name']);
                $urlAB = $filaAB['ability']['url'];
                $ataque->setDescripcion($this->buscarDescripcionAtaque($urlAB));
                $ataque->setIdAtaque($contAtaque);//MODIFICAR MAS ADELANTE

                if($contAtaque == 1){
                    $this->pokemon->setAtaque_1($ataque);
                }else{
                    if($contAtaque == 2){
                        $this->pokemon->setAtaque_2($ataque);
                    }else{
                        break;
                    }
                }
            }
            if($contAtaque == 1){
                $ataqueVacio = new Ataque();
                $ataqueVacio->setIdAtaque(0);
                $ataqueVacio->setDescripcion('');
                $ataqueVacio->setNombre('');
                $this->pokemon->setAtaque_2($ataqueVacio);
            }
        
            return $this->pokemon;
        }

        function buscarDescripcionAtaque($urlAtaque){
            $data = json_decode( file_get_contents($urlAtaque), true );
            $descripcionAtaque = '';
            foreach($data['flavor_text_entries'] as $fila){
                if($fila['language']['name'] == "es"){
                    $descripcionAtaque = $fila['flavor_text'];
                    return $descripcionAtaque;
                    //break;
                }
            }
            return $descripcionAtaque;
        }
    }

?>