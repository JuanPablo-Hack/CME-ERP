<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $GLOBALS['a']->insert('clientes', [
        'razon_social' => $datos[0],
        'situacion_fiscal' => $datos[2],
        'telefono' => $datos[6],
        'email' => $datos[5],
        'rfc ' => $datos[1],
        'dir' => $datos[3],
        'cp' => $datos[4],
        'nombre_representante' => $datos[7],
        'subcliente' => $datos[8],
        'correo_secu' => $datos[9],
        'operativo' => $datos[10],
        'liga_datos' => $datos[11],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCliente($id)
{
    $GLOBALS['a']->delete('clientes', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
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
            'subcliente' => $datos[8],
            'correo_secu' => $datos[9],
            'operativo' => $datos[10],
            'liga_datos' => $datos[11],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/clientes.php');
}
