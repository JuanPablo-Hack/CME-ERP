<?php
include "../models/Combustibles.php";
switch ($_POST['accion']) {
    case 'agregar':
        agregarregistros_combustible($_POST['datos']);
        break;
    case 'editar':
        editarregistros_combustible($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarregistros_combustible($_POST['id']);
        break;
}