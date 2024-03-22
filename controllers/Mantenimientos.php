<?php
include '../models/Mantenimientos.php';
switch ($_POST['accion']) {
    case 'agregar':
        agregarregistros_mantenimiento($_POST['datos']);
        break;
    case 'editar':
        editarregistros_mantenimiento($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarregistros_mantenimiento($_POST['id']);
        break;
    case 'cambiar':
        cambiarPagado($_POST['id']);
        break;
}
