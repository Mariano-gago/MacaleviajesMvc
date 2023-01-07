<?php
require __DIR__ . "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require "../includes/config/database.php";

require "funciones.php";

//Conexion base de datos
$db = conectarDB();

use Model\Viaje;

Viaje::setDB($db);


