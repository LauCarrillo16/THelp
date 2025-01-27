<?php
require_once __DIR__ . '/../modelo/usuarioModelo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'agregar') {
        $nick = $_POST['nick'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $rolSeleccionado = $_POST['rol'];

        $idRol = ($rolSeleccionado === 'Usuario') ? 1 : 2;

        try {
            $resultado = agregarUsuario($nick, $correo, $contraseña, $idRol);

            if ($resultado) {
                echo json_encode(['mensaje' => 'Usuario agregado correctamente.']);
            } else {
                echo json_encode(['error' => 'Error al agregar el usuario.']);
            }
        } catch (Exception $e) {
            echo json_encode(['error' => 'Error en el servidor: ' . $e->getMessage()]);
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $usuarios = obtenerUsuarios();
        echo json_encode($usuarios);
    } catch (Exception $e) {
        echo json_encode(['error' => 'Error en el servidor: ' . $e->getMessage()]);
    }
}
?>
