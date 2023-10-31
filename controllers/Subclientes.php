<?php
include "../models/Subclientes.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarCliente($_POST['datos']);
        break;
    case 'editar':
        editarCliente($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarCliente($_POST['id']);
        break;
}