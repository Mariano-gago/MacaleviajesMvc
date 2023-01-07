<?php

namespace MVC;

class Router{

    public $rutasGET = [];
    public $rutasPOST = [];


    public function get($url, $fn){
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas(){

        session_start();
        $auth = $_SESSION['login'] ?? null;
        
        //Array de rutas protegidas
        $rutas_protegidas = ['/admin', '/viajes/crear', 'viajes/actualizar', 'viajes/eliminar'];

        $urlActual = $_SERVER['REQUEST_URI'] ?? '/';
        
        if(strpos($urlActual, '?')){ // tuve que crear este if para que cuando sea un get, tome el redirect y no el request
            $urlActual = $_SERVER['REDIRECT_URL'];
            
        }
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($metodo === 'GET'){
            
            $fn = $this->rutasGET[$urlActual] ?? null;
        }else{
            
            $fn = $this->rutasPOST[$urlActual] ?? null;
            
        }

        //Proteger Rutas
        if(in_array($urlActual, $rutas_protegidas) && !$auth){
            header('Location: /');
        }

        if($fn){
            call_user_func($fn, $this);

        }else{
            echo "Pagina no encontrada";
        }
        
    }


    //Muestra la vista
    public function render($view, $datos = []){

        foreach($datos as $key => $value){
            $$key = $value;
        }


        //Inicia almacenamiento en memoria
        ob_start();
        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();

        include __DIR__ . "/views/layout.php";
    }
}




