<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $tipo_operador = $datos[0] > 0 ? 'Externo' : 'Propio';
    $GLOBALS['a']->insert('empresa_transportista', [
        'tipo' => $tipo_operador,
        'id_proveedor' => $datos[0],
        'nombre' => $datos[1],
        'rfc' => $datos[2],
        'curp ' => $datos[3],
        'licencia' => $datos[4],
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
    $tipo_operador = $datos[0] > 0 ? 'Externo' : 'Propio';
    $GLOBALS['a']->update(
        'empresa_transportista',
        [
            'tipo' => $tipo_operador,
            'id_proveedor' => $datos[0],
            'nombre' => $datos[1],
            'rfc' => $datos[2],
            'curp ' => $datos[3],
            'licencia' => $datos[4],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/operadores.php');
}