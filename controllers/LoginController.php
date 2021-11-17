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
    
    public static function resetPassword() {
        echo 'desde resetPassword';
    }
    
    public static function recoverPassword() {
        echo 'desde recoverPassword';
    }
    
    public static function crear() {
        echo 'desde crear cuenta';
    }
}