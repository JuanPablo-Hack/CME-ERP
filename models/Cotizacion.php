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

function cambiarEstadoCotizacion($id, $estado)
{
    $GLOBALS['a']->update(
        'cotizaciones',
        [
            'id_estado' => $estado,
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    echo 1;
}
