<?php
include "../models/Cobros.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarCobro($_POST['datos']);
        break;
    case 'editar':
        editarCobro($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarCobro($_POST['id']);
        break;
}