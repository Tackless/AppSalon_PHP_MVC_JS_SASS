<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\CitaController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/recoverPassword', [LoginController::class, 'recoverPassword']);
$router->post('/recoverPassword', [LoginController::class, 'recoverPassword']);
$router->get('/resetPassword', [LoginController::class, 'resetPassword']);
$router->post('/resetPassword', [LoginController::class, 'resetPassword']);

// Crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar Cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);

// AREA PRIVADA
$router->get('/cita', [CitaController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();