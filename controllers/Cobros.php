<?php
include '../models/Cobros.php';
error_reporting(0);
switch ($_POST['accion']) {
    case 'agregar':
        agregarCobro(
            $_POST['datos'],
            $_POST['cliente_cobros'],
            $_POST['proveedor_cobros']
        );
        break;
    case 'editar':
        editarCobro($_POST['id'], $_POST['datos'], $_POST['obligaciones']);
        break;
    case 'actualizar':
        actualizarEstadoCuenta($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarCobro($_POST['id']);
        break;
    case 'CambiarEstado':
        cambiarEstado($_POST['IDCotizacion'], $_POST['EstadoCotizacion']);
        break;
}
