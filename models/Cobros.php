<?php
include 'DataBase.php';
$a = new database();
function agregarCobro($datos)
{
    $GLOBALS['a']->insert('cobros', [
        'ref_int' => $datos[0],
        'costo_cliente' => $datos[1],
        'estadias_cliente ' => $datos[2],
        'lavado_cliente' => $datos[3],
        'burreo_cliente' => $datos[4],
        'demoras_cliente' => $datos[5],
        'maniobras_cliente' => $datos[6],
        'otros_cliente' => $datos[7],
        'comision_cliente' => $datos[8],
        'nombre_comision_cliente' => $datos[9],
        'costo_proveedor ' => $datos[10],
        'estadias_proveedor' => $datos[11],
        'lavado_proveedor' => $datos[12],
        'burreo_proveedor' => $datos[13],
        'demoras_proveedor' => $datos[14],
        'maniobras_proveedor' => $datos[15],
        'otros_proveedor' => $datos[16],
        'comision_proveedor' => $datos[17],
        'nombre_comision_proveedor' => $datos[18],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarCobro($id)
{
    $GLOBALS['a']->delete('cobros', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function actualizarEstadoCuenta($id, $datos)
{
    $GLOBALS['a']->update(
        'cobros',
        [
            'pago_proveedor' => $datos[0],
            'pago_cliente' => $datos[1],
            'observaciones' => $datos[3],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/cobros.php');
}

function editarCobro($id, $datos)
{
    $GLOBALS['a']->update(
        'cobros',
        [
            'ref_int' => $datos[0],
            'costo_cliente' => $datos[1],
            'estadias_cliente ' => $datos[2],
            'lavado_cliente' => $datos[3],
            'burreo_cliente' => $datos[4],
            'demoras_cliente' => $datos[5],
            'maniobras_cliente' => $datos[6],
            'otros_cliente' => $datos[7],
            'comision_cliente' => $datos[8],
            'nombre_comision_cliente' => $datos[9],
            'costo_proveedor ' => $datos[10],
            'estadias_proveedor' => $datos[11],
            'lavado_proveedor' => $datos[12],
            'burreo_proveedor' => $datos[13],
            'demoras_proveedor' => $datos[14],
            'maniobras_proveedor' => $datos[15],
            'otros_proveedor' => $datos[16],
            'comision_proveedor' => $datos[17],
            'nombre_comision_proveedor' => $datos[18],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/cobros.php');
}
