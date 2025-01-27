$(document).ready(function () {
    function cargarUsuarios() {
        $.ajax({
            url: "../controlador/usuarioControlador.php",
            method: "GET",
            success: function (response) {
                const usuarios = JSON.parse(response);
                const tbody = $("#user-table-body");
                tbody.empty();

                usuarios.forEach((usuario) => {
                    const row = `
                        <tr>
                            <td>${usuario.id_usuario}</td>
                            <td>${usuario.nick}</td>
                            <td>${usuario.correo}</td>
                            <td>${usuario.rol}</td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-edit">Editar</button>
                            </td>
                        </tr>
                    `;
                    tbody.append(row);
                });
            },
            error: function () {
                alert("Error al cargar los usuarios.");
            },
        });
    }

    $("#add-user-form").on("submit", function (e) {
        e.preventDefault();

        const nick = $("#nick-usuario").val();
        const correo = $("#email-usuario").val();
        const contraseña = $("#password-usuario").val();
        const rol = $("#rol-usuario").val();

        if (!rol) {
            alert("Por favor selecciona un rol.");
            return;
        }

        $.ajax({
            url: "../controlador/usuarioControlador.php",
            method: "POST",
            data: { accion: "agregar", nick, correo, contraseña, rol },
            success: function (response) {
                const res = JSON.parse(response);

                if (res.mensaje) {
                    alert(res.mensaje);
                    $("#add-user-form")[0].reset();
                    cargarUsuarios();
                } else if (res.error) {
                    alert(res.error);
                }
            },
            error: function () {
                alert("Error en la comunicación con el servidor.");
            },
        });
    });

    cargarUsuarios();
});
