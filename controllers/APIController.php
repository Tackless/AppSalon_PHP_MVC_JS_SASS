<?php 

namespace Controllers;

use Model\Servicio;
use MVC\Router;

class APIController {
    public static function index(Router $router) {
        $servicios = Servicio::all();

        echo json_encode($servicios);
    }
}