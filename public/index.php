<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\InicioController;
$router = new Router();

//Página principal
$router->get('/', [InicioController::class, 'inicio']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();