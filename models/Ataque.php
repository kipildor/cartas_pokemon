<?php
    trait Ataque{
        private $idAtaque;
        private $nombre;
        private $descripcion;

        public function __construct($idAtaque, $nombre, $descripcion){
            $this->idAtaque = $idAtaque;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
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