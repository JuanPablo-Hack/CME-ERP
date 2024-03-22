<?php
include 'DataBase.php';
$a = new database();
function agregarregistros_combustible($datos)
{
    cambiarEstadoServicio($datos[0]);
    $GLOBALS['a']->insert('registros_combustible', [
        'unidad' => $datos[0],
        'kminicial' => $datos[1],
        'kmfinal' => $datos[2],
        'litros ' => $datos[3],
        'factura' => $datos[4],
        'importe' => $datos[5],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarregistros_combustible($id)
{
    $GLOBALS['a']->delete('registros_combustible', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarregistros_combustible($id, $datos)
{
    $GLOBALS['a']->update(
        'registros_combustible',
        [
            'unidad' => $datos[0],
            'kminicial' => $datos[1],
            'kmfinal' => $datos[2],
            'litros ' => $datos[3],
            'factura' => $datos[4],
            'importe' => $datos[5],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/combustibles.php');
}

function cambiarEstadoServicio($id)
{
    $GLOBALS['a']->update(
        'servicios',
        [
            'combus' => 1,
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
}
