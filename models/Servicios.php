<?php
include 'DataBase.php';
$a = new database();
function agregarServicio($datos)
{
    $GLOBALS['a']->insert('servicios', [
        'origen' => $datos[0],
        'destino' => $datos[1],
        'proveedor' => $datos[2],
        'cliente' => $datos[3],
        'subcliente' => $datos[4],
        'posicionamiento' => $datos[5],
        'pedimente' => $datos[6],
        'recinto' => $datos[7],
        'mercancia' => $datos[8],
        'contenido' => $datos[9],
        'imo' => $datos[10],
        'clasi' => $datos[11],
        'no_contenedores' => $datos[12],
        'tipo_contenedor' => $datos[13],
        'peso_neto' => $datos[14],
        'peso_bruto' => $datos[15],
        'operador' => $datos[16],
        'placas' => $datos[17],
        'obser' => $datos[23],
        'ejecutivo' => $datos[18],
        'hora' => $datos[19],
        'recinto_test' => $datos[20],
        'ejecutivo' => $datos[18],
        'POSICIONAMIENTO_FEC' => $datos[21],
        'PEDIMENTO_FEC' => $datos[22],
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
        'servicios',
        [
            'origen' => $datos[1],
            'destino' => $datos[2],
            'proveedor' => $datos[3],
            'cliente' => $datos[4],
            'subcliente' => $datos[0],
            'posicionamiento' => $datos[5],
            'pedimente' => $datos[6],
            'recinto' => $datos[7],
            'mercancia' => $datos[8],
            'contenido' => $datos[9],
            'imo' => $datos[10],
            'clasi' => $datos[11],
            'no_contenedores' => $datos[12],
            'tipo_contenedor' => $datos[13],
            'peso_neto' => $datos[14],
            'peso_bruto' => $datos[15],
            'operador' => $datos[16],
            'placas' => $datos[17],
            'obser' => $datos[23],
            'ejecutivo' => $datos[18],
            'hora' => $datos[19],
            'recinto_test' => $datos[20],
            'POSICIONAMIENTO_FEC' => $datos[21],
            'PEDIMENTO_FEC' => $datos[22],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/servicios.php');
}

function agregarExtras($id, $datos)
{
    $GLOBALS['a']->update(
        'servicios',
        [
            'asegurado' => $datos[1],
            'costro_extras' => $datos[0],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/servicios.php');
}

function cambiarEstado($id, $datos)
{
    $GLOBALS['a']->update(
        'servicios',
        [
            'estado' => $datos[0],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    echo 1;
}
