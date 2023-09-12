<?php
include 'DataBase.php';
$a = new database();
function agregarServicio($datos)
{
    $GLOBALS['a']->insert('servicios', [
        'origen' => $datos[0],
        'destino' => $datos[1],
        'contenedor' => $datos[2],
        'cliente' => $datos[3],
        'asignado ' => $datos[4],
        'unidad' => $datos[5],
        'terminal' => $datos[6],
        'hora' => $datos[7],
        'despacho' => $datos[8],
        'entrega' => $datos[9],
        'vacio' => $datos[10],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarServicio($id)
{
    $GLOBALS['a']->delete('servicios', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarServicio($id, $datos)
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
