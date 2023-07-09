<?php
include "DataBase.php";
$a = new database();
function agregarCliente($datos)
{

    $GLOBALS['a']->insert('trabajador', ['nombre' => $datos[0], 'correo' => $datos[1], 'tel' => $datos[2], 'cargo' => $datos[3], 'pwd ' => $datos[5], 'rol' => $datos[4]]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCliente($id)
{
    $GLOBALS['a']->delete('trabajador', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update("trabajador", ['nombre' => $datos[0], 'correo' => $datos[2], 'tel' => $datos[6], 'cargo' => $datos[5], 'pwd ' => $datos[1], 'rol' => $datos[3]], "id='$id'");
    $result = $GLOBALS['a']->sql;
    header("Location: ../Admin/usuarios.php");
}
