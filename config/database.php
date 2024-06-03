<?php
try {
    $database = new PDO('pgsql:host=localhost;dbname=class', 'postgres', '27561321');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error al conectar a la base de datos: ' . $e->getMessage());
}
?>
