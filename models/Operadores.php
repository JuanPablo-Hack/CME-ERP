<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $GLOBALS['a']->insert('empresa_transportista', [
        'tipo' => $datos[0],
        'id_proveedor' => $datos[1],
        'nombre' => $datos[2],
        'rfc' => $datos[3],
        'curp ' => $datos[4],
        'licencia' => $datos[5],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}
function eliminarCliente($id)
{
    $GLOBALS['a']->delete('empresa_transportista', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update(
        'empresa_transportista',
        [
            'tipo' => $datos[0],
            'id_proveedor' => $datos[1],
            'nombre' => $datos[2],
            'rfc' => $datos[3],
            'curp ' => $datos[4],
            'licencia' => $datos[5],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/operadores.php');
}
