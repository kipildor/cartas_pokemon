<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function buscarPokemonPorNumero(){
        $pokenum = $_POST['pokenum'];
        
        $mensaje = "";
/*
        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            $mensaje = "Nuevo alumno creado";
        }else{
            $mensaje = "La matrícula ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
*/
    }

    
}

?>