<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $GLOBALS['a']->insert('subcliente', [
        'id_cliente' => $datos[0],
        'nombre' => $datos[1],
        'rfc' => $datos[2],
        'dir' => $datos[3],
        
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCliente($id)
{
    $GLOBALS['a']->delete('subcliente', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update(
        'subcliente',
        [
            'nombre' => $datos[0],
            'rfc' => $datos[1],
            'dir' => $datos[2],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/subclientes.php');
}
