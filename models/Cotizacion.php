<?php
include 'DataBase.php';
$a = new database();
function agregarCotizacion($datos, $conceptos, $cantidades)
{
    $GLOBALS['a']->insert('cotizaciones', [
        'id_cliente' => $datos[0],
        'no_conceptos' => $datos[1],
        'conceptos' => $conceptos,
        'cantidades' => $cantidades,
        'id_estado ' => 1,
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCotizacion($id)
{
    $GLOBALS['a']->delete('cotizaciones', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCotizacion($id, $datos)
{
    $GLOBALS['a']->update(
        'cotizaciones',
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
    header('Location: ../Admin/cotizaciones.php');
}
