<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29786ff4dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/style.css">

</head>

<body>
    <div class="fixed-header">
        <h1 class="h4">Bienvenido, <span id="admin-name">Administrador</span></h1>
        <button class="btn btn-danger" id="logout-btn">Cerrar Sesión</button>
    </div>

    <div class="container">
        <div class="options-container optAdminCont">
            <a class="aAdmin" href="adminUsuarios.php">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-users mb-3"></i>
                        <h5 class="card-title">Gestión de Usuarios</h5>
                        <p class="card-text">Administra los usuarios del sistema con facilidad.</p>
                    </div>
                </div>
            </a>
            <a class="aAdmin" href="adminTickets.php">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-ticket-alt mb-3"></i>
                        <h5 class="card-title">Gestión de Tickets</h5>
                        <p class="card-text">Gestiona y supervisa los tickets generados.</p>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>