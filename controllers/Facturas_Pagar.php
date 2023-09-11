<?php
include '../models/Facturas_Pagar.php';
switch ($_POST['accion']) {
    case 'agregar':
        agregarFacturasPagar($_POST['datos']);
        break;
    case 'editar':
        editarFacturasPagar($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarFacturasPagar($_POST['id']);
        break;
}
