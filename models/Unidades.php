<?php
include 'DataBase.php';
$a = new database();
function agregarCliente($datos)
{
    $tipo_operador = $datos[0] > 0 ? 'Externo' : 'Propio';
    $GLOBALS['a']->insert('unidades', [
        'tipo' => $tipo_operador,
        'id_proveedor' => $datos[0],
        'permiso' => $datos[1],
        'numero_sct' => $datos[2],
        'placa ' => $datos[3],
        'ano' => $datos[4],
        'peso' => $datos[5],
        'config' => $datos[6],
        'placas_conte ' => $datos[7],
        'nombre_ase' => $datos[8],
        'no_poliza' => $datos[9],
        'asegu_da' => $datos[10],
        'no_poliza_da ' => $datos[11],
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
    $tipo_operador = $datos[0] > 0 ? 'Externo' : 'Propio';
    $GLOBALS['a']->update(
        'unidades',
        [
            'tipo' => $tipo_operador,
            'id_proveedor' => $datos[0],
            'permiso' => $datos[1],
            'numero_sct' => $datos[2],
            'placa ' => $datos[3],
            'ano' => $datos[4],
            'peso' => $datos[5],
            'config' => $datos[6],
            'placas_conte ' => $datos[7],
            'nombre_ase' => $datos[8],
            'no_poliza' => $datos[9],
            'asegu_da' => $datos[10],
            'no_poliza_da ' => $datos[11],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/unidades.php');
}