<?php
require_once '../modelo/modeloLogin.php'; 

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = $_POST['username'];
            $password = $_POST['password'];

            $model = new UsuarioModel();
            $usuarioDB = $model->verificarLogin($usuario, $password);

            if ($usuarioDB) {
                session_start();
                $_SESSION['user_id'] = $usuarioDB['id_usuario'];

                if ($usuarioDB['id_rol'] == 1) {
                    header('Location: ../vista/usuario.php');
                } elseif ($usuarioDB['id_rol'] == 2) {
                    header('Location: ../vista/soporte.php');
                } else {
                    header('Location: ../vista/admin.php');
                }
                exit();
            } else {
                echo 'Usuario o contraseña incorrectos';
            }
        }
    }
}

$loginController = new LoginController();
$loginController->login();
?>
