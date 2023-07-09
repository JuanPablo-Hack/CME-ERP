<?php
include "DataBase.php";
$a = new database();
function agregarCliente($datos)
{

    $GLOBALS['a']->insert('unidades', ['modelo' => $datos[0], 'ano' => $datos[1], 'color' => $datos[2], 'placas' => $datos[3], 'noeconomico ' => $datos[4], 'capacidad' => $datos[5], 'tipocombustible' => $datos[6], 'serie' => $datos[7]]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}
function eliminarCliente($id)
{
    $GLOBALS['a']->delete('unidades', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update("unidades", ['razon_social' => $datos[0], 'situacion_fiscal' => $datos[2], 'telefono' => $datos[6], 'email' => $datos[5], 'rfc ' => $datos[1], 'dir' => $datos[3], 'cp' => $datos[4], 'nombre_representante' => $datos[7]], "id='$id'");
    $result = $GLOBALS['a']->sql;
    header("Location: ../Admin/unidades.php");
}
