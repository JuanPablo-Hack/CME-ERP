<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $GLOBALS['a']->insert('unidades', [
        'tipo' => $datos[0],
        'id_proveedor' => $datos[1],
        'permiso' => $datos[2],
        'numero_sct' => $datos[3],
        'placa ' => $datos[4],
        'ano' => $datos[5],
        'peso' => $datos[6],
        'config' => $datos[7],
        'placas_conte ' => $datos[8],
        'nombre_ase' => $datos[9],
        'no_poliza' => $datos[10],
        'asegu_da' => $datos[11],
        'no_poliza_da ' => $datos[12],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}
function eliminarCliente($id)
{
    $GLOBALS['a']->delete('unidades', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarCliente($id, $datos)
{
    $GLOBALS['a']->update(
        'unidades',
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
    header('Location: ../Admin/unidades.php');
}
