<?php
require_once __DIR__ . '/../config/conexion.php';

function agregarUsuario($nick, $correo, $contraseña, $rol) {
    $conn = obtenerConexion();
    $contraseñaCifrada = password_hash($contraseña, PASSWORD_DEFAULT);
    $estadoActivo = 1;

    $sql = "INSERT INTO USUARIO (NICK, CORREO, CONTRASEÑA, ID_ROL, ID_ESTADO) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    return $stmt->execute([$nick, $correo, $contraseñaCifrada, $rol, $estadoActivo]);
}

//Obtener los usuarios
function obtenerUsuarios() {
    $conn = obtenerConexion();

    $sql = "SELECT u.ID_USUARIO, u.NICK, u.CORREO, ur.DESCRIPCION AS ROL
            FROM USUARIO u
            INNER JOIN USUARIO_ROL ur ON u.ID_ROL = ur.ID_USUARIO_ROL
            WHERE u.ID_ESTADO = 1";
    $stmt = $conn->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
