<?php

namespace Model;

class Admin extends Viaje{

    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDb = ['id', 'email', 'password'];

    public $id;
    public $email;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';

    }

    public function validar(){
        if(!$this->email){
            self::$errores[] = "El email es obligatorio";
        }

        if(!$this->password){
            self::$errores[] = "El password es obligatorio";
        }

        return self::$errores;
    }

    public function existeUsuario(){
        //Revisar si existe el usuario
        $query = "SELECT * FROM ". self::$tabla . " WHERE email = '" . $this->email . "'LIMIT 1";

        $resultado = self::$db->query($query);

        if(!$resultado->num_rows){
            self::$errores[] = 'Usuario o contraseña invalidos';
            return;
        }
        return $resultado;
    }

    public function verificarPass($resultado){
        $usuario = $resultado->fetch_object();

        //debuger($usuario->password);
        $autenticado = password_verify($this->password, $usuario->password);
        
        if(!$autenticado){
            self::$errores[] = 'Usuario o contraseña invalidos';
        }

        return $autenticado;
    }

    public function autenticar(){
        session_start();

        $_SESSION['usuario'] = $this->email;
        $_SESSION['login'] = true;

        header('Location: /admin');
    }
}