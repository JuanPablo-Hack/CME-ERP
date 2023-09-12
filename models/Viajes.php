<?php
include 'DataBase.php';
$a = new database();
function agregarViaje($datos)
{
    $GLOBALS['a']->insert('viajes', [
        'ref_int' => $datos[0],
        'km' => $datos[1],
        'diesel' => $datos[2],
        'ingreso_puerto' => $datos[3],
        'maniobras ' => $datos[4],
        'pistas' => $datos[5],
        'operador' => $datos[6],
        'otros' => $datos[7],
        'comida' => $datos[8],
        'comision' => $datos[9],
        'id_estado' => 1,
        'observaciones' => $datos[10],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
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
        'clientes',
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
    header('Location: ../Admin/clientes.php');
}
