<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Gestion Tickets</title>
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

    <div class="container mt-5">
        <div class="accordion mb-4" id="ticketAccordion">
            <div class="accordion-item cabezaAcordeon">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Generar Nuevo Ticket
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#ticketAccordion">
                    <div class="accordion-body">
                        <form id="generate-ticket-form" class="row g-3">
                            <div class="col-md-4">
                                <label for="ticket-subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="ticket-subject" placeholder="Asunto del ticket"
                                    required>
                            </div>
                            <div class="col-md-8">
                                <label for="ticket-description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="ticket-description" rows="1"
                                    placeholder="Describe el problema" required></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" id="btnGenerar" class="btn btn-primary">Generar Ticket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-4">Gestión de Tickets</h2>
        <button class="btn btn-secondary btn-warning mb-3">Generar Reporte Semanal de Tickets</button>
        <div class="table-responsive">
            <table class="table table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Asunto</th>
                        <th>Descripción</th>
                        <th>Usuario que lo Generó</th>
                        <th>Fecha de Creación</th>
                        <th>Respuesta</th>
                        <th>Usuario que dio Soporte</th>
                        <th>Fecha de Respuesta</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="ticket-table-body">
                    <tr>
                        <td>1</td>
                        <td>Problema de Acceso</td>
                        <td>No puedo acceder al sistema</td>
                        <td>Juan Pérez</td>
                        <td>2025-01-01</td>
                        <td>Se restableció la contraseña</td>
                        <td>Carlos López</td>
                        <td>2025-01-02</td>
                        <td><span class="badge bg-success">Resuelto</span></td>
                        <td>
                            <button class="btn btn-info btn-sm btn-edit">Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>