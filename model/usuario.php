<?php
class Usuario {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function verificarCredenciales($email) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function registrarUsuario($email, $password, $nombre) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = $this->db->prepare("INSERT INTO usuarios (email, password, nombre) VALUES (:email, :password, :nombre)");
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        return $query->execute();
    }
}
?>
