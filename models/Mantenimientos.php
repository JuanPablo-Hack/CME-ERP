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
            'razon_social' => $datos[0],
            'situacion_fiscal' => $datos[2],
            'telefono' => $datos[6],
            'email' => $datos[5],
            'rfc ' => $datos[1],
            'dir' => $datos[3],
            'cp' => $datos[4],
            'nombre_representante' => $datos[7],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/mantenimientos.php');
}
