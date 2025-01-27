<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Soporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29786ff4dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/style.css">
</head>

<body>
    <div class="fixed-header">
        <h1 class="h4">Bienvenido, <span id="support-name">Soporte</span></h1>
        <button class="btn btn-danger" id="logout-btn">Cerrar Sesión</button>
    </div>

    <div class="container soporte">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Abiertos</h5>
                        <p class="card-text fs-4" id="open-tickets">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Tickets en Proceso</h5>
                        <p class="card-text fs-4" id="in-progress-tickets">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Cerrados</h5>
                        <p class="card-text fs-4" id="closed-tickets">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Cancelados</h5>
                        <p class="card-text fs-4" id="canceled-tickets">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-section">
            <div class="input-group">
                <input type="text" class="form-control" id="ticket-id-input" placeholder="Buscar ID">
                <button class="btn btn-secondary" id="search-ticket-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="table-container">
            <h2>Lista de Tickets</h2>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="ticket-table-body">
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/soporte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>