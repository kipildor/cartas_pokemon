<?php
    class Tipo{
        private $idTipo;
        private $descripcion;
        private $urlImgTipo;

/*
        public function __construct(){

        }
*/
        public function __construct($idTipo, $descripcion, $urlImgTipo){
            $this->idTipo = $idTipo;
            $this->descripcion = $descripcion;
            $this->urlImgTipo = $urlImgTipo;
        }

        public function getIdTipo(){
            return $this->idTipo;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getUrlImgTipo(){
            return $this->urlImgTipo;
        }

        public function setIdTipo($idTipo){
            $this->idTipo = $idTipo;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setUrlImgTipo($urlImgTipo){
            $this->urlImgTipo = $urlImgTipo;
        }
    }

?>