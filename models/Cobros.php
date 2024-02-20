<?php
include 'DataBase.php';
$a = new database();
function agregarCobro($datos)
{
    $GLOBALS['a']->insert('cobros', [
        'ref_int' => $datos[0],
        'no_factura' => $datos[1],
        'costo_cliente' => $datos[2],
        'estadias_cliente ' => $datos[3],
        'lavado_cliente' => $datos[4],
        'burreo_cliente' => $datos[5],
        'demoras_cliente' => $datos[6],
        'maniobras_cliente' => $datos[7],
        'otros_cliente' => $datos[8],
        'comision_cliente' => $datos[9],
        'nombre_comision_cliente' => $datos[10],
        'costo_proveedor ' => $datos[11],
        'estadias_proveedor' => $datos[12],
        'lavado_proveedor' => $datos[13],
        'burreo_proveedor' => $datos[14],
        'demoras_proveedor' => $datos[15],
        'maniobras_proveedor' => $datos[16],
        'otros_proveedor' => $datos[17],
        'comision_proveedor' => $datos[18],
        'nombre_comision_proveedor' => $datos[19],
        'no_factura_provee' => $datos[20],
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
            'no_factura' => $datos[1],
            'costo_cliente' => $datos[2],
            'estadias_cliente ' => $datos[3],
            'lavado_cliente' => $datos[4],
            'burreo_cliente' => $datos[5],
            'demoras_cliente' => $datos[6],
            'maniobras_cliente' => $datos[7],
            'otros_cliente' => $datos[8],
            'comision_cliente' => $datos[9],
            'nombre_comision_cliente' => $datos[10],
            'costo_proveedor ' => $datos[11],
            'estadias_proveedor' => $datos[12],
            'lavado_proveedor' => $datos[13],
            'burreo_proveedor' => $datos[14],
            'demoras_proveedor' => $datos[15],
            'maniobras_proveedor' => $datos[16],
            'otros_proveedor' => $datos[17],
            'comision_proveedor' => $datos[18],
            'nombre_comision_proveedor' => $datos[19],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/cobros.php');
}
function cambiarEstado($id, $datos)
{
    $GLOBALS['a']->update(
        'cobros',
        [
            'id_estado' => $datos[0],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    echo 1;
}
