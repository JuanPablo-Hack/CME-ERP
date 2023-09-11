<?php
include 'DataBase.php';
$a = new database();
function agregarregistros_combustible($datos)
{
    $GLOBALS['a']->insert('registros_combustible', [
        'unidad' => $datos[0],
        'kminicial' => $datos[1],
        'kmfinal' => $datos[2],
        'tiposervicio' => $datos[3],
        'litros ' => $datos[4],
        'factura' => $datos[5],
        'operador' => $datos[6],
        'importe' => $datos[7],
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
    header('Location: ../Admin/registros_combustible.php');
}
