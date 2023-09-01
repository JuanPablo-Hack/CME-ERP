<?php
include "../models/Facturas_Emitidas.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarFacturas_Emitidas($_POST['datos']);
        break;
    case 'editar':
        editarFacturas_Emitidas($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarFacturas_Emitidas($_POST['id']);
        break;
}