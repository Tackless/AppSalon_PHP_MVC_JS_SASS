<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;

$router = new Router();

// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/resetPassword', [LoginController::class, 'resetPassword']);
$router->post('/resetPassword', [LoginController::class, 'resetPassword']);
$router->get('/recoverPassword', [LoginController::class, 'recoverPassword']);
$router->post('/recoverPassword', [LoginController::class, 'recoverPassword']);

// Crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();