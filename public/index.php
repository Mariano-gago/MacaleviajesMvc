<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
use Controllers\PropiedadController;
use Controllers\PaginasController;

$router = new Router();

//Rutas GET
$router->get('/admin', [PropiedadController::class, 'admin']);
$router->get('/viajes/crear', [PropiedadController::class, 'crear']);
$router->get('/viajes/actualizar', [PropiedadController::class, 'actualizar']);

//Vistas GET
$router->get('/', [PaginasController::class, 'index']);
$router->get('/destinos', [PaginasController::class, 'destinos']);
$router->get('/disney', [PaginasController::class, 'disney']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->get('/informacion', [PaginasController::class, 'informacion']);
$router->get('/modal', [PaginasController::class, 'modal']);

//Rutas POST
$router->post('/viajes/crear', [PropiedadController::class, 'crear']);
$router->post('/viajes/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/viajes/eliminar', [PropiedadController::class, 'eliminar']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->post('/informacion', [PaginasController::class, 'informacion']);


//Login y Auth
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();