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
    case 'editar':
        editarCotizacion($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarCotizacion($_POST['id']);
        break;
}
