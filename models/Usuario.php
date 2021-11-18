<?php 

namespace Model;

class Usuario extends ActiveRecord {
    // Base de datos

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', ' nombre', 'apellido', 'email', 'password', 'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? null;
        $this->confirmado = $args['confirmado'] ?? null;
        $this->token = $args['token'] ?? '';
    }

    // Mensajes de validación para la creación de la cuenta
    public function validarNuevaCuenta() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Usuario es Obligatorio';
        }
        
        if (!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido del Usuario es Obligatorio';
        }

        return self::$alertas;
    }
    
}