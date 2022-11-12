<?
require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app app.php</p>";
        require_once 'libs/view.php';
        $vista = new View();
        //$vista->render('buscarPokemon');
        echo '<script>window.location ="http://localhost/poke04/views/main/index.php"</script>';
/*
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            //return false;
        }else{
            $archivoController = 'controllers/' . $url[0] . '.php';

            if(file_exists($archivoController)){
                require_once $archivoController;

                // inicializar controlador
                $controller = new $url[0];
                $controller->loadModel($url[0]);
                
                // # elementos del arreglo
                $nparam = sizeof($url);

                if($nparam > 1){
                    if($nparam > 2){
                        $param = [];
                        for($i = 2; $i<$nparam; $i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller->render();
                }
            }else{
                $controller = new Errores();
            }
        }
*/        
    }
}

?>