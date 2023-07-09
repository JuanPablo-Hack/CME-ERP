<?php
include "DataBase.php";
$a = new database();
function agregarCliente($datos)
{

    $GLOBALS['a']->insert('tipos_servicios', ['nombre' => $datos[0], 'precio' => $datos[1], 'descripcion' => $datos[2]]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCliente($id)
{
    $GLOBALS['a']->delete('tipos_servicios', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update("tipos_servicios", ['razon_social' => $datos[0], 'situacion_fiscal' => $datos[2], 'telefono' => $datos[6], 'email' => $datos[5], 'rfc ' => $datos[1], 'dir' => $datos[3], 'cp' => $datos[4], 'nombre_representante' => $datos[7]], "id='$id'");
    $result = $GLOBALS['a']->sql;
    header("Location: ../Admin/tipos_servicios.php");
}
