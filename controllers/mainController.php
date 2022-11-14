
<?php

class MainController{
    
    function __construct(){
        //parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
        //echo '<script>window.location ="views/main/index.php"</script>';
        require_once("views/main/index.php");
    }

    function home(){
        //echo $this->folderPath;
        //echo '<script>window.location ="index.php"</script>';
        //require_once("views/main/index.php");
    }
/*
    function render(){
        $this->view->render('main/index');
    }
*/
    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}

?>