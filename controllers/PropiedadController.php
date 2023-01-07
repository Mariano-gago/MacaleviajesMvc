<?php

namespace Controllers;
use MVC\Router;
use Model\Viaje;
use Intervention\Image\ImageManagerStatic as Image;


class PropiedadController{

    public static function admin(Router $router){

        $viajes = Viaje::all();
        $registrado = $_GET['registrado'] ?? null;
        
        $router->render('viajes/admin', [
            'viajes' => $viajes,
            'registrado' => $registrado
        ]);
    }


    //Crear viaje
    public static function crear(Router $router){
        
        $viaje = new Viaje;
        // Array con mensaje de errores
        $errores = Viaje::getErrores();

    //Genera las variables a partir de los datos del array POST
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Instancia de la clase Viaje
    $viaje = new Viaje($_POST['viaje']);
    //Crea la carpeta de imagenes
    //Genera un nombre unico para imagenes
    $nombreIcono1 = md5( uniqid( rand(), true)) . ".png";
    $nombreIcono2 = md5( uniqid( rand(), true)) . ".png";
    $nombreIcono3 = md5( uniqid( rand(), true)) . ".png";
    $nombreImagen1 = md5( uniqid( rand(), true)) . ".jpg";
    $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg";
    $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
    //Setea imagen
    /*Realiza un resize a la imagen con intervention*/
    if($_FILES['viaje']['tmp_name']['icono1']){
        $icono1 = Image::make($_FILES['viaje']['tmp_name']['icono1'])->fit(50, 50);
        $viaje->setImagen1($nombreIcono1);
    }
    if($_FILES['viaje']['tmp_name']['icono2']){
        $icono2 = Image::make($_FILES['viaje']['tmp_name']['icono2'])->fit(50, 50);
        $viaje->setImagen2($nombreIcono2);
    }
    if($_FILES['viaje']['tmp_name']['icono3']){
        $icono3 = Image::make($_FILES['viaje']['tmp_name']['icono3'])->fit(50, 50);
        $viaje->setImagen3($nombreIcono3);
    }
    if($_FILES['viaje']['tmp_name']['imagen1']){
        $imagen1 = Image::make($_FILES['viaje']['tmp_name']['imagen1'])->fit(650, 650);
        $viaje->setImagen4($nombreImagen1);
    }
    if($_FILES['viaje']['tmp_name']['imagen2']){
        $imagen2 = Image::make($_FILES['viaje']['tmp_name']['imagen2'])->fit(650, 650);
        $viaje->setImagen5($nombreImagen2);
    }
    if($_FILES['viaje']['tmp_name']['imagen3']){
        $imagen3 = Image::make($_FILES['viaje']['tmp_name']['imagen3'])->fit(650, 650);
        $viaje->setImagen6($nombreImagen3);
    }   
    $errores = $viaje->validar();
    //$incluye = $viaje->incluye();
    //Revisar que el array de errores este vacio para insertarlos en la base de datos
    if(empty($errores)){
    // Crear la carpta para subir las imagenes
    if(!is_dir(CARPETA_IMAGENES)){
        mkdir(CARPETA_IMAGENES);
    }

    //Guarda la imagen en el servidor
    $icono1->save(CARPETA_IMAGENES . $nombreIcono1);
    $icono2->save(CARPETA_IMAGENES . $nombreIcono2);
    $icono3->save(CARPETA_IMAGENES . $nombreIcono3);
    $imagen1->save(CARPETA_IMAGENES . $nombreImagen1);
    $imagen2->save(CARPETA_IMAGENES . $nombreImagen2);
    $imagen3->save(CARPETA_IMAGENES . $nombreImagen3);

    
    
        $viaje->guardar();
    
        }       
    }

    $router->render('viajes/crear', [
        'viaje' => $viaje,
        'errores' => $errores
        ]);

}



    public static function actualizar(Router $router){
        $id = validarORedireccionar('/admin');
        
        $viaje = Viaje::find($id);
        
        $errores = Viaje::getErrores();

        
        //Metodo POST para actualizar
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Instancia de la clase Viaje
            //$viaje = new Viaje($_POST['viaje']);
            $args= $_POST['viaje'];
            $viaje->sincronizar($args);
            
            //Crea la carpeta de imagenes
            //Genera un nombre unico para imagenes
            $nombreIcono1 = md5( uniqid( rand(), true)) . ".png";
            $nombreIcono2 = md5( uniqid( rand(), true)) . ".png";
            $nombreIcono3 = md5( uniqid( rand(), true)) . ".png";
            $nombreImagen1 = md5( uniqid( rand(), true)) . ".jpg";
            $nombreImagen2 = md5( uniqid( rand(), true)) . ".jpg";
            $nombreImagen3 = md5( uniqid( rand(), true)) . ".jpg"; 
            //Setea imagen
            /*Realiza un resize a la imagen con intervention*/
            if($_FILES['viaje']['tmp_name']['icono1']){
                $icono1 = Image::make($_FILES['viaje']['tmp_name']['icono1'])->fit(50, 50);
                $viaje->setImagen1($nombreIcono1);
            }
            if($_FILES['viaje']['tmp_name']['icono2']){
                $icono2 = Image::make($_FILES['viaje']['tmp_name']['icono2'])->fit(50, 50);
                $viaje->setImagen2($nombreIcono2);
            }
            if($_FILES['viaje']['tmp_name']['icono3']){
                $icono3 = Image::make($_FILES['viaje']['tmp_name']['icono3'])->fit(50, 50);
                $viaje->setImagen3($nombreIcono3);
            }
            if($_FILES['viaje']['tmp_name']['imagen1']){
                $imagen1 = Image::make($_FILES['viaje']['tmp_name']['imagen1'])->fit(650, 650);
                $viaje->setImagen4($nombreImagen1);
            }
            if($_FILES['viaje']['tmp_name']['imagen2']){
                $imagen2 = Image::make($_FILES['viaje']['tmp_name']['imagen2'])->fit(650, 650);
                $viaje->setImagen5($nombreImagen2);
            }
            if($_FILES['viaje']['tmp_name']['imagen3']){
                $imagen3 = Image::make($_FILES['viaje']['tmp_name']['imagen3'])->fit(650, 650);
                $viaje->setImagen6($nombreImagen3);
            }   
            $errores = $viaje->validar();
            //$incluye = $viaje->incluye();
            //Revisar que el array de errores este vacio para insertarlos en la base de datos
            if(empty($errores)){
            // Crear la carpeta para subir las imagenes
            if(!is_dir(CARPETA_IMAGENES)){
                mkdir(CARPETA_IMAGENES);
            }
        
            //Guarda la imagen en el servidor
            $icono1->save(CARPETA_IMAGENES . $nombreIcono1);
            $icono2->save(CARPETA_IMAGENES . $nombreIcono2);
            $icono3->save(CARPETA_IMAGENES . $nombreIcono3);
            $imagen1->save(CARPETA_IMAGENES . $nombreImagen1);
            $imagen2->save(CARPETA_IMAGENES . $nombreImagen2);
            $imagen3->save(CARPETA_IMAGENES . $nombreImagen3);

            //debuger($viaje);
            $viaje->actualizar();
            
            }       
        }


        $router->render('/viajes/actualizar', [
            'viaje' => $viaje,
            'errores' => $errores
        ]);
    }


    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
        $viaje = Viaje::find($id);
        
        $viaje->eliminar();
        } 
    }
    }
}

