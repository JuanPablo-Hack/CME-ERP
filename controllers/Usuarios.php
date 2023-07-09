<?php
include "../models/Usuarios.php";
include "./sendMail.php";
switch ($_POST['accion']) {
    case 'agregar':
        $datos = $_POST['datos'];
        $contraseña = generatePassword(12);
        MandarAlertaUsuario($datos[1], $contraseña);
        array_push($datos, sha1($contraseña));
        agregarCliente($datos);
        break;
    case 'editar':
        editarCliente($_POST['id'], $_POST['datos']);
        break;
    case 'eliminar':
        eliminarCliente($_POST['id']);
        break;
}
function generatePassword($length)
{
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern) - 1;
    for ($i = 0; $i < $length; $i++) {
        $key .= substr($pattern, mt_rand(0, $max), 1);
    }
    return $key;
}
