<?php 

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        
        $router->render('/auth/login', [

        ]);
    }
    
    public static function logout() {
        echo 'desde logout';
    }
    
    public static function recoverPassword(Router $router) {
        
        $router->render('/auth/recoverPassword', [

        ]);
    }
    
    public static function resetPassword() {
        echo 'desde resetPassword';
    }
    
    public static function crear(Router $router) {
        

        
        $router->render('/auth/crear-cuenta', [

        ]);
    }
}