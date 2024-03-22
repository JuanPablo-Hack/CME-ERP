<?php
include 'DataBase.php';
$a = new database();
function agregarregistros_mantenimiento($datos)
{
    $GLOBALS['a']->insert('registros_mantenimiento', [
        'unidad' => $datos[0],
        'taller' => $datos[1],
        'nofactura' => $datos[2],
        'descripcion' => $datos[3],
        'fecha ' => $datos[4],
        'km' => $datos[5],
        'operador' => $datos[6],
        'prox_manto' => $datos[7],
        'autoriza' => $datos[8],
        'importe' => $datos[9],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarregistros_mantenimiento($id)
{
    $GLOBALS['a']->delete('registros_mantenimiento', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarregistros_mantenimiento($id, $datos)
{
    $GLOBALS['a']->update(
        'registros_mantenimiento',
        [
            'unidad' => $datos[0],
            'taller' => $datos[1],
            'nofactura' => $datos[2],
            'descripcion' => $datos[3],
            'fecha ' => $datos[4],
            'km' => $datos[5],
            'operador' => $datos[6],
            'prox_manto' => $datos[7],
            'autoriza' => $datos[8],
            'importe' => $datos[9],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/mantenimientos.php');
}

function cambiarPagado($id)
{
    $GLOBALS['a']->update(
        'registros_mantenimiento',
        [
            'id_estado' => 'PAGADO',
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/mantenimientos.php');
}
