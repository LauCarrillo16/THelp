$(document).ready(function () {
    cargarUsuarios();

    function cargarUsuarios() {
        $.ajax({
            url: "../controlador/usuarioControlador.php",
            method: "GET",
            success: function (response) {
                try {
                    const usuarios = JSON.parse(response);
                    const tbody = $("#user-table-body");
                    tbody.empty();

                    usuarios.forEach((usuario) => {
                        tbody.append(`
                            <tr>
                                <td>${usuario.id_usuario}</td>
                                <td>${usuario.nick}</td>
                                <td>${usuario.correo}</td>
                                <td>${usuario.rol}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm btn-edit">Editar</button>
                                </td>
                            </tr>
                        `);
                    });

                    $(".btn-editar").on("click", function () {
                        const id = $(this).data("id");
                        const nick = $(this).data("nick");
                        const correo = $(this).data("correo");
                        const estado = $(this).data("estado");
                        const password = $(this).data("password");

                        $("#edit-user-id").val(id);
                        $("#edit-user-nick").val(nick);
                        $("#edit-user-email").val(correo);
                        $("#edit-user-status").val(estado);
                        $("#edit-usuario-password").val(password);

                        $("#editUserModal").modal("show");
                    });
                } catch (e) {
                    console.error("Error al parsear la respuesta:", e);
                    alert("Error inesperado al cargar usuarios.");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error en la solicitud AJAX:", status, error);
                alert("Error al cargar usuarios desde el servidor.");
            },
        });
    }

    $("#add-user-form").on("submit", function (e) {
        e.preventDefault();

        const nick = $("#nick-usuario").val();
        const correo = $("#email-usuario").val();
        const contraseña = $("#password-usuario").val();
        const rol = $("#rol-usuario").val();

        $.ajax({
            url: "../controlador/usuarioControlador.php",
            method: "POST",
            data: { accion: "agregar", nick, correo, contraseña, rol },
            success: function (response) {
                try {
                    const res = JSON.parse(response);
                    if (res.mensaje) {
                        alert(res.mensaje);
                        $("#add-user-form")[0].reset();
                        cargarUsuarios();
                    } else if (res.error) {
                        alert(res.error);
                    }
                } catch (e) {
                    console.error("Error al procesar la respuesta del servidor:", e);
                    alert("Error inesperado al agregar el usuario.");
                }
            },
            error: function () {
                alert("Error al enviar los datos. Por favor, inténtalo de nuevo.");
            },
        });
    });
});
