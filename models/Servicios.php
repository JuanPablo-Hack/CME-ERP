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
        'obser' => $datos[20],
        'ejecutivo' => $datos[18],
        'hora' => $datos[19],
        'estado' => 1,
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
            'origen' => $datos[0],
            'destino' => $datos[1],
            'posicionamiento' => $datos[2],
            'pedimento' => $datos[3],
            'recinto' => $datos[4],
            'mercancia' => $datos[5],
            'contenido' => $datos[6],
            'imo' => $datos[7],
            'clasi' => $datos[8],
            'num_cont' => $datos[9],
            'tipo_contenedores' => $datos[10],
            'peso_neto' => $datos[11],
            'peso_bruto' => $datos[12],
            'observaciones' => $datos[13],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/servicios.php');
}
