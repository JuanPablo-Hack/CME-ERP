<?php
include '../models/Viajes.php';
switch ($_POST['accion']) {
    case 'agregar':
        agregarViaje($_POST['datos']);
        break;
    case 'editar':
        editarViaje($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarViaje($_POST['id']);
        break;
}
