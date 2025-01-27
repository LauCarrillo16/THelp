<?php
require_once '../config/conexion.php';

class UsuarioModel {

    public function verificarLogin($usuario, $password) {
        $conn = obtenerConexion();

        $query = 'SELECT * FROM usuario WHERE nick = :usuario LIMIT 1';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $usuarioDB = $stmt->fetch(PDO::FETCH_ASSOC);

            if (isset($usuarioDB['contraseÑa'])) {
                if (password_verify($password, $usuarioDB['contraseÑa'])) {
                    return $usuarioDB;
                } else {
                    return false;
                }
            } else {
                echo 'Campo contraseña no encontrado en la base de datos';
                return false;
            }
        } else {
            return false;
        }
    }
}
?>
