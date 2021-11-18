<?php 

namespace Controllers;

use Classes\Email;
use Model\Usuario;
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
        
        $usuario = new Usuario;

        $alertas = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            // Revisar que alerta este vacio
            if (empty($alertas)) {
                // Verificar que el usuario no este registrado
                $resultado = $usuario->existeUsuario();

                if ($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Hashear el passowrd
                    $usuario->hashPassword();

                    // Generar un token único
                    $usuario->crearToken();
                    
                    // Enviar el E-mail
                    $email = new Email($usuario->email, $usuario->nombre, $usuario->token);

                    $email->enviarConfirmacion();

                    // Crear el usuario
                    $resultado = $usuario->guardar();
                    if ($resultado) {
                        header('location: /mensaje');
                    }
                }
            }
        }
        
        $router->render('/auth/crear-cuenta', [
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    public static function mensaje(Router $router) {
        $router->render('auth/mensaje', []);
    }
}