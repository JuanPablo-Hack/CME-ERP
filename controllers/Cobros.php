<?php
include '../models/Cobros.php';
error_reporting(0);
switch ($_POST['accion']) {
    case 'agregar':
        agregarCobro(
            $_POST['datos'],
            $_POST['iva_costo_cliente'],
            $_POST['ret_costo_cliente'],
            $_POST['iva_esta_cliente'],
            $_POST['iva_lavado_cliente'],
            $_POST['iva_flete_cliente'],
            $_POST['ret_flete_cliente'],
            $_POST['iva_demoras_cliente'],
            $_POST['iva_maniobras_cliente'],
            $_POST['iva_costo_proveedor'],
            $_POST['ret_costo_proveedor'],
            $_POST['iva_esta_proveedor'],
            $_POST['iva_lavado_proveedor'],
            $_POST['iva_flete_proveedor'],
            $_POST['ret_flete_proveedor'],
            $_POST['iva_demoras_proveedor'],
            $_POST['iva_maniobras_proveedor']
        );
        break;
    case 'editar':
        editarCobro($_POST['id'], $_POST['datos']);
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
