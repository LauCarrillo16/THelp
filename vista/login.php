<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29786ff4dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/style.css">
</head>

<body>
    <div class="login-container">
        <div class="back-to-home">
            <a href="../index.php" class="btn btn-secondary btn-sm btnVolver">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </a>
        </div>

        <h2 class="text-center mb-4">Iniciar Sesión</h2>
        <form id="loginForm" action="../controlador/controladorLogin.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label"><i class="fas fa-user"></i> Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu usuario"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><i class="fas fa-lock"></i> Contraseña</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
            <div id="error-message" style="display: none; color: red;"></div>
        </form>
    </div>

    <script src="../js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>