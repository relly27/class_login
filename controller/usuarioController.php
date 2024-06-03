<?php
class UsuarioController {
    private $usuarioModel;

    public function __construct($usuarioModel) {
        $this->usuarioModel = $usuarioModel;
    }

    public function mostrarLogin() {
        include 'views/login.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $usuario = $this->usuarioModel->verificarCredenciales($email);

            if ($usuario && password_verify($password, $usuario['password'])) {
                // redirigir si se qiere
                echo "Inicio de sesión exitoso";
            } else {
                $error = "Correo electrónico o contraseña incorrectos";
                include 'views/login.php';
            }
        } else {
            $this->mostrarLogin();
        }
    }

    public function mostrarRegistro() {
        include 'views/registro.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($this->usuarioModel->registrarUsuario($email, $password, $nombre)) {
                echo "Registro exitoso";
            } else {
                $error = "Error al registrar el usuario";
                include 'views/registro.php';
            }
        } else {
            $this->mostrarRegistro();
        }
    }
}
?>
