<?php 
    class Router{
        private $controller;
        private $method;

        public function __construct(){
            $this->matchRoute();
        }

        public function matchRoute(){
            $url = explode('/', URL);

            //if(file_exists($archivoController)){
                //require_once $archivoController;
            
            
            $this->controller = !empty($url[1])? $url[1] : 'main';
            
            if((str_contains($this->controller, 'index')) == true){
                $this->controller = 'main';
                //echo 'yes';
            }else{
                //echo 'no';
            }

            //$this->controller = !empty($url[1])? $url[1] : 'main';
            $this->method = !empty($url[2])? $url[2] : 'home';
            $this->controller = $this->controller . 'Controller';

            $url_controller = (__DIR__ . '/controllers/'.$this->controller.'.php');
            
            if(file_exists($url_controller)){
                require_once($url_controller);
            }else{
                require_once(__DIR__ . '/controllers/mainController.php');
            }
            
            //echo (__DIR__ . '/controllers/'.$this->controller.'.php');
        }

        public function run(){
            $controller = new $this->controller();
            $method = $this->method;
            $controller->$method();
        }
    }

?>