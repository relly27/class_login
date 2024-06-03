<?php
require 'config/database.php';
require 'model/Usuario.php';
require 'controller/UsuarioController.php';

$usuarioModel = new Usuario($database);
$usuarioController = new UsuarioController($usuarioModel);

// Enrutamiento básico
if (isset($_GET['action'])) {
    if ($_GET['action'] === 'login') {
        $usuarioController->login();
    } elseif ($_GET['action'] === 'register') {
        $usuarioController->register();
    }
} else {
    $usuarioController->mostrarLogin();
}
?>
