<?php
include '../models/Cotizacion.php';
switch ($_POST['accion']) {
    case 'agregar':
        agregarCotizacion(
            $_POST['datos'],
            implode(',', $_POST['conceptos']),
            implode(',', $_POST['cantidades'])
        );
        break;
    case 'cambiar_estado':
        cambiarEstadoCotizacion($_POST['idCotizacion'], $_POST['estadoSeleccionado']);
        break;
    case 'eliminar':
        eliminarCotizacion($_POST['id']);
        break;
}
