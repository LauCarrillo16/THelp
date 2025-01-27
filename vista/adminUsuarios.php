<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Help Gestion Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29786ff4dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assents/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/usuarioJS.js"></script>
</head>

<body>
    <div class="fixed-header">
        <h1 class="h4">Bienvenido, <span id="admin-name">Administrador</span></h1>
        <button class="btn btn-danger" id="logout-btn">Cerrar Sesión</button>
    </div>
    <div class="container mt-5">
        <div class="accordion mb-4" id="userAccordion">
            <div class="accordion-item cabezaAcordeon">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Agregar Nuevo Usuario
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#userAccordion">
                    <div class="accordion-body">
                        <form id="add-user-form" class="row g-3">
                            <div class="col-md-3">
                                <label for="user-nick" class="form-label">Nick</label>
                                <input type="text" class="form-control" id="nick-usuario" placeholder="Ingresa el nick"
                                    required>
                            </div>
                            <div class="col-md-3">
                                <label for="user-email" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="email-usuario"
                                    placeholder="Ingresa el correo" required>
                            </div>
                            <div class="col-md-3">
                                <label for="user-role" class="form-label">Rol</label>
                                <select class="form-select" id="rol-usuario" required>
                                    <option selected disabled>Selecciona un rol</option>
                                    <option value="Usuario">Usuario</option>
                                    <option value="Soporte">Soporte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="user-password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password-usuario"
                                    placeholder="Ingresa una contraseña" required>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" id="btnAgregar" class="btn btn-primary">Agregar Usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-4">Usuarios Registrados</h2>
        <div class="table-responsive">
            <table class="table table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nick</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="user-table-body">
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form id="edit-user-form">
                    <div class="modal-body">
                        <input type="hidden" id="edit-user-id">
                        <div class="mb-3">
                            <label for="edit-user-nick" class="form-label">Nick</label>
                            <input type="text" class="form-control" id="edit-user-nick" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="edit-user-email" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-status" class="form-label">Estado</label>
                            <select class="form-select" id="edit-user-status" required>
                                <option selected disabled>Selecciona un estado</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-password" class="form-label">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="edit-user-password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="../js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>