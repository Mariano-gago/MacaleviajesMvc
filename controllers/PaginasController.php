<?php

namespace Controllers;
use MVC\Router;
use Model\Viaje;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController{

    public static function index(Router $router){

        $viajes = Viaje::destacado();
        $router->render('paginas/index', [
            'viajes' => $viajes
        ]);
    }

    public static function destinos(Router $router){

        $viajes = Viaje::all();

        $router->render('paginas/destinos',[
            'viajes' => $viajes
        ]);
    }

    public static function disney(Router $router){
        $router->render('paginas/disney');
    }

    public static function nosotros(Router $router){
        $router->render('paginas/nosotros');
    }

    public static function contacto(Router $router){

        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            

            $info = $_POST['contacto'];
            //Instacia de PHP mailer

            $mail = new PHPMailer();
            
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '02cc070d6fa639';//Mfgago
            $mail->Password = '04026a7a1546bd';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            /*Contenido del email*/
            //Remitente del email
            $mail->setFrom($info['email']);
            //Destinatario del email
            $mail->addAddress('admin@macaleviajes.com', 'MacaleViajes.com');
            $mail->Subject = 'Contacto';

            //Habilitar HTML
            $mail->isHTML(true);
            // Charset es para caracteres especiales como acentos
            $mail->CharSet = 'UTF-8';

            //Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' . $info['nombre'] . ' ' .  $info['apellido'] .'</p>';
            $contenido .= '<p>Email: ' . $info['email'] .'</p>';
            $contenido .= '<p>Telefono: ' . $info['telefono'] .'</p>';
            $contenido .= '<p>Consulta: ' . $info['mensaje'] .'</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin html';

            //enviar mail
            if($mail->send()){
                echo "Mensaje enviado correctamente";
            }else{
                echo "No se pudo enviar el mensaje...";
            }
        }
        
        $router->render('paginas/contacto', [
            
        ]);
    }

    public static function informacion(Router $router){
        
        $envio = $_SERVER['REQUEST_METHOD'];
        //debuger($destino);
        if($envio === 'GET'){
            $destino = $_GET;
            //debuger($destino);
            $viajes = Viaje::findDestino($destino['destino']);      
            $router->render('paginas/informacion', [
            'viajes' => $viajes
        ]);
        }else{

            $info = $_POST['consulta'];
            
            $mail = new PHPMailer();
            
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '02cc070d6fa639';//Mfgago
            $mail->Password = '04026a7a1546bd';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            /*Contenido del email*/
            //Remitente del email
            $mail->setFrom($info['email']);
            //Destinatario del email
            $mail->addAddress('admin@macaleviajes.com', 'MacaleViajes.com');
            $mail->Subject = 'Consulta de viaje';

            //Habilitar HTML
            $mail->isHTML(true);
            // Charset es para caracteres especiales como acentos
            $mail->CharSet = 'UTF-8';

            //Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p><em>Tienes una nueva consulta por un viaje</em></p>';
            $contenido .= '<p> Id: ' .$info['idViaje'] . ' '. 'Destino: ' .$info['destino'] .'</p>';
            $contenido .= '<p>Descripcion: ' .$info['descripcion'] .'</p>';
            $contenido .= '<p>Nombre: ' . $info['nombre'] . ' ' .  $info['apellido'] .'</p>';
            $contenido .= '<p>Email: ' . $info['email'] .'</p>';
            $contenido .= '<p>Telefono: ' . $info['telefono'] .'</p>';
            $contenido .= '<p>Consulta: ' . $info['mensaje'] .'</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin html';
            if($mail->send()){
                echo "Mensaje enviado correctamente";
            }else{
                echo "No se pudo enviar el mensaje...";
            }

        }
        
    } 
}