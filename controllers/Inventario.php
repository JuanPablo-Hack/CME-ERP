<?php
include "../models/Inventario.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarInventario($_POST['datos']);
        break;
    case 'editar':
        editarInventario($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarInventario($_POST['id']);
        break;
}