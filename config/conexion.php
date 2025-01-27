<?php
function obtenerConexion() {
    $host = 'localhost';
    $dbname = 'THelp';
    $username = 'postgres';
    $password = '12345';

    try {
        $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password); // Cambia a "mysql" si usas MySQL
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }
}
?>
