# THelp

Este proyecto es un Sistema de Gestión de Tickets de Soporte desarrollado en PHP, con una base de datos PostgreSQL. El sistema permite a los usuarios generar, gestionar, y dar seguimiento a tickets de soporte. Además, permite la gestión de roles de usuarios y exportación de reportes semanales en formato .xlsx.

- [Descripción](#descripción)
- [Diseños](#diseños)
- [Lenguajes](#lenguajes)
- [Uso](#uso)
- [Desarrollado](#desarrollado)

  ## Descripcion
  Roles de Usuario:

Administrador: Gestiona usuarios y roles.
Responsable de Soporte: Encargado de gestionar y dar respuesta a los tickets.
Usuario: Genera los tickets de soporte.
Módulos Principales:

Gestión de Usuarios: Permite gestionar los usuarios del sistema, asignarles roles, y mantener la seguridad de la información.
Gestión de Tickets: Permite a los usuarios generar tickets, mientras que los responsables de soporte gestionan y resuelven esos tickets.
Estados de los Tickets:

Abierto: El ticket ha sido creado y está pendiente de atención.
En Proceso: El ticket está siendo atendido.
Cerrado: El ticket ha sido resuelto.
Cancelado: El ticket ha sido cancelado y no se dará seguimiento.
Funcionalidades:

No eliminación de tickets: No se permite la eliminación de tickets.
Exportación de Reportes: Los reportes semanales de tickets pueden ser exportados a archivos .xlsx.
Logs de Acción: Todas las acciones realizadas en el sistema (como la creación, edición, y cambio de estado de un ticket) se almacenarán en un archivo de log para tener un registro de las actividades.
