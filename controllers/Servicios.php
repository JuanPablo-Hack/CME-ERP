<?php
include "../models/Servicios.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarServicio($_POST['datos']);
        break;
    case 'editar':
        editarServicio($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarServicio($_POST['id']);
        break;
}