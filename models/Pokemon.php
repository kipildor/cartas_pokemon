<?php
    require_once('Tipo.php');

    class Pokemon{
        private $idPokemon;
        private $nombre;
        private $hp;
        private $urlImg;
        //use Ataque;
        private $tipos = array();
        private $ataque_1;
        private $ataque_2;
        

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
            //$tipos[] = new Tipo();
        }
        public function cargarTipos($type){
            $tipo = new Tipo();
            switch ($type) {
                case 'normal':
                    $tipo->setDescripcion('Normal');
                    $tipo->setIdTipo(1);
                    $tipo->setUrlImgTipo('/views/images/tipo_normal.png');
                    break;
                case 'fighting':
                    $tipo->setDescripcion('Lucha');
                    $tipo->setIdTipo(2);
                    $tipo->setUrlImgTipo('/views/images/tipo_lucha.png');
                    break;
                case 'flying':
                    $tipo->setDescripcion('Volador');
                    $tipo->setIdTipo(3);
                    $tipo->setUrlImgTipo('/views/images/tipo_volador.png');
                    break;
                case 'poison':
                    $tipo->setDescripcion('Veneno');
                    $tipo->setIdTipo(4);
                    $tipo->setUrlImgTipo('/views/images/tipo_veneno.png');
                    break;
                case 'ground':
                    $tipo->setDescripcion('Tierra');
                    $tipo->setIdTipo(5);
                    $tipo->setUrlImgTipo('/views/images/tipo_tierra.png');
                    break;
                case 'rock':
                    $tipo->setDescripcion('Roca');
                    $tipo->setIdTipo(6);
                    $tipo->setUrlImgTipo('/views/images/tipo_roca.png');
                    break;
                case 'bug':
                    $tipo->setDescripcion('Bicho');
                    $tipo->setIdTipo(7);
                    $tipo->setUrlImgTipo('/views/images/tipo_bicho.png');
                    break;
                case 'ghost':
                    $tipo->setDescripcion('Fantasma');
                    $tipo->setIdTipo(8);
                    $tipo->setUrlImgTipo('/views/images/tipo_fantasma.png');
                    break;
                case 'steel':
                    $tipo->setDescripcion('Acero');
                    $tipo->setIdTipo(9);
                    $tipo->setUrlImgTipo('/views/images/tipo_acero.png');
                    break;
                case 'fire':
                    $tipo->setDescripcion('Fuego');
                    $tipo->setIdTipo(10);
                    $tipo->setUrlImgTipo('/views/images/tipo_fuego.png');
                    break;
                case 'water':
                    $tipo->setDescripcion('Agua');
                    $tipo->setIdTipo(11);
                    $tipo->setUrlImgTipo('/views/images/tipo_agua.png');
                    break;
                case 'grass':
                    $tipo->setDescripcion('Hierba');
                    $tipo->setIdTipo(12);
                    $tipo->setUrlImgTipo('/views/images/tipo_hierba.png');
                    break;
                case 'electric':
                    $tipo->setDescripcion('Eléctrico');
                    $tipo->setIdTipo(13);
                    $tipo->setUrlImgTipo('/views/images/tipo_electrico.png');
                    break;
                case 'psychic':
                    $tipo->setDescripcion('Psíquico');
                    $tipo->setIdTipo(14);
                    $tipo->setUrlImgTipo('/views/images/tipo_psiquico.png');
                    break;
                case 'ice':
                    $tipo->setDescripcion('Hielo');
                    $tipo->setIdTipo(15);
                    $tipo->setUrlImgTipo('/views/images/tipo_hielo.png');
                    break;
                case 'dragon':
                    $tipo->setDescripcion('Dragon');
                    $tipo->setIdTipo(16);
                    $tipo->setUrlImgTipo('/views/images/tipo_dragon.png');
                    break;
                case 'dark':
                    $tipo->setDescripcion('Siniestro');
                    $tipo->setIdTipo(17);
                    $tipo->setUrlImgTipo('/views/images/tipo_siniestro.png');
                    break;
                case 'fairy':
                    $tipo->setDescripcion('Hada');
                    $tipo->setIdTipo(18);
                    $tipo->setUrlImgTipo('/views/images/tipo_hada.png');
                    break;
                case 'unknown':
                    $tipo->setDescripcion('Desconocido');
                    $tipo->setIdTipo(19);
                    $tipo->setUrlImgTipo('/views/images/tipo_nada.png');
                    break;
                case 'shadow':
                    $tipo->setDescripcion('Sombra');
                    $tipo->setIdTipo(20);
                    $tipo->setUrlImgTipo('/views/images/tipo_nada.png');
                    break;
                default:
                    $tipo->setDescripcion('Nada');
                    $tipo->setIdTipo(0);
                    $tipo->setUrlImgTipo('/views/images/tipo_nada.png');
                    break;
            }
            return $tipo;
        }
        /*
        public function cargarAtaques($attack){
            $ataque = new Ataque();
            switch ($attack) {
                case 'normal':
                    //$tipo->setDescripcion('Normal');
                    //$tipo->setIdTipo(1);
                    //$tipo->setUrlImgTipo('/views/images/tipo_normal.png');
                    break;
                
            }
            return $ataque;
        }
        */
        public function cargarFondo1($type){
            $urlFondo = '';
            switch ($type) {
                case 'Normal':
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
                case 'Lucha':
                    $urlFondo = '/views/images/marmol_marron.jpg';
                    break;
                case 'Volador':
                    $urlFondo = '/views/images/marmol_azul.jpg';
                    break;
                case 'Veneno':
                    $urlFondo = '/views/images/marmol_violeta.jpg';
                    break;
                case 'Tierra':
                    $urlFondo = '/views/images/marmol_marron.jpg';
                    break;
                case 'Roca':
                    $urlFondo = '/views/images/marmol_marron.jpg';
                    break;
                case 'Bicho':
                    $urlFondo = '/views/images/marmol_verde.jpg';
                    break;
                case 'Fantasma':
                    $urlFondo = '/views/images/marmol_violeta.jpg';
                    break;
                case 'Acero':
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
                case 'Fuego':
                    $urlFondo = '/views/images/marmol_rojo.jpg';
                    break;
                case 'Agua':
                    $urlFondo = '/views/images/marmol_azul.jpg';
                    break;
                case 'Hierba':
                    $urlFondo = '/views/images/marmol_verde.jpg';
                    break;
                case 'Eléctrico':
                    $urlFondo = '/views/images/marmol_amarillo.jpg';
                    break;
                case 'Psíquico':
                    $urlFondo = '/views/images/marmol_violeta.jpg';
                    break;
                case 'Hielo':
                    $urlFondo = '/views/images/marmol_azul.jpg';
                    break;
                case 'Dragon':
                    $urlFondo = '/views/images/marmol_naranja.jpg';
                    break;
                case 'Siniestro':
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
                case 'Hada':
                    $urlFondo = '/views/images/marmol_violeta.jpg';
                    break;
                case 'Desconocido':
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
                case 'Sombra':
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
                default:
                    $urlFondo = '/views/images/marmol_gris.jpg';
                    break;
            }
            return $urlFondo;
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
        public function getTipos(){
            return $this->tipos;
        }
        public function getAtaque_1(){
            return $this->ataque_1;
        }
        public function getAtaque_2(){
            return $this->ataque_2;
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
        public function addTipos($tipo){
            if($tipo instanceof Tipo) {
                $this->tipos[]=$tipo;
            }
        }
        public function setAtaque_1($ataque){
            if($ataque instanceof Ataque) {
                $this->ataque_1=$ataque;
            }
        }
        public function setAtaque_2($ataque){
            if($ataque instanceof Ataque) {
                $this->ataque_2=$ataque;
            }
        }
    }

?>