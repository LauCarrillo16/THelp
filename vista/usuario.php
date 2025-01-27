<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29786ff4dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/style.css">

</head>

<body>
    <div class="fixed-header">
        <h1 class="h4">Bienvenido, <span id="user-name">Usuario</span></h1>
        <button class="btn btn-danger" id="logout-btn">Cerrar Sesión</button>
    </div>

    <div class="container">
        <div class="accordion" id="ticketAccordion ">
            <div class="accordion-item cabezaAcordeon">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne " aria-expanded="false" aria-controls="collapseOne">
                        Crear Nuevo Ticket
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#ticketAccordion">
                    <div class="accordion-body">
                        <form id="ticket-form">
                            <div class="mb-3">
                                <label for="ticket-subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="ticket-subject"
                                    placeholder="Ingresa el asunto" required>
                            </div>
                            <div class="mb-3">
                                <label for="ticket-description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="ticket-description" rows="3"
                                    placeholder="Describe el problema..." required></textarea>
                            </div>
                            <button type="submit" id="btnGenerar" class="btn btn-primary">Generar Ticket</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-container tablaTickets">
            <h2 class="misTickets">Mis Tickets</h2>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
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

    <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">Ticket Generado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>El ticket se generó exitosamente.</p>
                    <p><strong>ID del Ticket:</strong> <span id="ticket-id"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/usuario.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>