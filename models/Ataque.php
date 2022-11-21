<?php
    class Ataque{
        private $idAtaque = 0;
        private $nombre;
        private $descripcion;
/*
        public function __construct($idAtaque, $nombre, $descripcion){
            $this->idAtaque = $idAtaque;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
        }
*/
        public function __construct(){
            
        }
        public function getIdAtaque(){
            return $this->idAtaque;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setIdAtaque($idAtaque){
            $this->idAtaque = $idAtaque;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

    }


?>