<?php
include "DataBase.php";
$a = new database();
function agregarInventario($datos)
{
    $GLOBALS['a']->insert('productos', ['nombre' => $datos[0], 'cliente' => $datos[1], 'proveedor' => $datos[2], 'peso_bruto' => $datos[3], 'peso_tara ' => $datos[4], 'peso_neto' => $datos[5], 'descrip' => $datos[6]]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarInventario($id)
{
    $GLOBALS['a']->delete('productos', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarInventario($id, $datos)
{
    $GLOBALS['a']->update("productos", ['razon_social' => $datos[0], 'situacion_fiscal' => $datos[2], 'telefono' => $datos[6], 'email' => $datos[5], 'rfc ' => $datos[1], 'dir' => $datos[3], 'cp' => $datos[4], 'nombre_representante' => $datos[7]], "id='$id'");
    $result = $GLOBALS['a']->sql;
    header("Location: ../Admin/Inventarios.php");
}