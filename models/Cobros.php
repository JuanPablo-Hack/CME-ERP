<?php
include 'DataBase.php';
$a = new database();
function agregarCobro($datos)
{
    $GLOBALS['a']->insert('cobros', [
        'ref_int' => $datos[0],
        'costo_cliente' => $datos[1],
        'iva_cliente' => $datos[2],
        'retencion_cliente' => $datos[3],
        'estadias_cliente ' => $datos[4],
        'iva_estadias_cliente' => $datos[5],
        'lavado_cliente' => $datos[6],
        'burreo_cliente' => $datos[7],
        'maniobras_cliente' => $datos[8],
        'otros_cliente' => $datos[9],
        'total_flete_cliente' => $datos[10],
        'comision_cliente' => $datos[11],
        'costo_proveedor ' => $datos[12],
        'iva_proveedor' => $datos[13],
        'retencion_proveedor' => $datos[14],
        'estadias_proveedor' => $datos[15],
        'iva_estadias_proveedor' => $datos[16],
        'lavado_proveedor' => $datos[17],
        'burreo_proveedor' => $datos[18],
        'maniobras_proveedor' => $datos[19],
        'otros_proveedor' => $datos[20],
        'total_flete_proveedor' => $datos[21],
        'comision_proveedor' => $datos[22],
        'utilidad' => $datos[23],
        'pago_proveedor' => $datos[24],
        'pago_cliente' => $datos[25],
        'observaciones' => $datos[26],
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

function editarCobro($id, $datos)
{
    $GLOBALS['a']->update(
        'cobros',
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
    header('Location: ../Admin/cobros.php');
}
