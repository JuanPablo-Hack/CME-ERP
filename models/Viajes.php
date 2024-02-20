<?php
include 'DataBase.php';
$a = new database();
function agregarViaje($datos)
{
    $unidad = obtenerUnidadViajes($datos[0]);
    $GLOBALS['a']->insert('viajes', [
        'ref_int' => $datos[0],
        'id_unidad' => $unidad,
        'diesel' => $datos[1],
        'ingreso_puerto' => $datos[2],
        'maniobras ' => $datos[3],
        'pistas' => $datos[4],
        'operador' => $datos[5],
        'otros' => $datos[6],
        'comida' => $datos[7],
        'comision' => $datos[8],
        'id_estado' => 1,
        'observaciones' => $datos[9],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
    cambiarEstadoServicio($datos[0], 2);
}

function eliminarViaje($id)
{
    $GLOBALS['a']->delete('viajes', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarViaje($id, $datos)
{
    $GLOBALS['a']->update(
        'viajes',
        [
            'ref_int' => $datos[0],
            'diesel' => $datos[1],
            'ingreso_puerto' => $datos[2],
            'maniobras' => $datos[3],
            'pistas' => $datos[4],
            'operador' => $datos[5],
            'otros' => $datos[6],
            'comida' => $datos[7],
            'comision' => $datos[8],
            'observaciones' => $datos[9],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/viajes.php');
}

function cambiarEstadoServicio($id, $estado)
{
    $GLOBALS['a']->update(
        'servicios',
        [
            'id_estado' => $estado,
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
}

function cambiarEstadoViaje($id, $estado, $id_servicio)
{
    cambiarEstadoServicio($id_servicio, $estado);
    $GLOBALS['a']->update(
        'viajes',
        [
            'id_estado' => $estado,
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function obtenerUnidadViajes($id)
{
    $GLOBALS['a']->select('servicios', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['placas'];
}
