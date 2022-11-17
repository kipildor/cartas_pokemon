<?php
    class Pokemon{
        private $idPokemon;
        private $nombre;
        private $hp;
        private $urlImg;
/*
        public function __construct($idPokemon, $nombre, $hp, $urlImg)
        {
            $this->idPokemon = $idPokemon;
            $this->nombre = $nombre;
            $this->hp = $hp;
            $this->urlImg = $urlImg;
        }
*/
        public function __construct()
        {
            
        }
        public function getIdPokemon(){
            return $this->idPokemon;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getHp(){
            return $this->hp;
        }
        public function getUrlImg(){
            return $this->urlImg;
        }

        public function setIdPokemon($idPokemon){
            $this->idPokemon = $idPokemon;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setHp($hp){
            $this->hp = $hp;
        }
        public function setUrlImg($urlImg){
            $this->urlImg = $urlImg;
        }
    }

?>