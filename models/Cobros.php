<?php
include 'DataBase.php';
$a = new database();
function agregarCobro(
    $datos,
    $iva_costo_cliente,
    $ret_costo_cliente,
    $iva_esta_cliente,
    $iva_lavado_cliente,
    $iva_flete_cliente,
    $ret_flete_cliente,
    $iva_demoras_cliente,
    $iva_maniobras_cliente,
    $iva_costo_proveedor,
    $ret_costo_proveedor,
    $iva_esta_proveedor,
    $iva_lavado_proveedor,
    $iva_flete_proveedor,
    $ret_flete_proveedor,
    $iva_demoras_proveedor,
    $iva_maniobras_proveedor
) {
    $iva_costo_cliente_cobro =
        $iva_costo_cliente == 1 ? calcularIVA($datos[2]) : 0;
    $ret_costo_cliente_cobro =
        $ret_costo_cliente == 1 ? calcularRetencion($datos[2]) : 0;
    $iva_esta_cliente_cobro =
        $iva_esta_cliente == 1 ? calcularIVA($datos[3]) : 0;
    $iva_lavado_cliente_cobro =
        $iva_lavado_cliente == 1 ? calcularIVA($datos[4]) : 0;
    $iva_flete_cliente_cobro =
        $iva_flete_cliente == 1 ? calcularIVA($datos[5]) : 0;
    $ret_flete_cliente_cobro =
        $ret_flete_cliente == 1 ? calcularRetencion($datos[5]) : 0;
    $iva_demoras_cliente_cobro =
        $iva_demoras_cliente == 1 ? calcularIVA($datos[6]) : 0;
    $iva_maniobras_cliente_cobro =
        $iva_maniobras_cliente == 1 ? calcularIVA($datos[7]) : 0;
    $iva_costo_proveedor_cobro =
        $iva_costo_proveedor == 1 ? calcularIVA($datos[11]) : 0;
    $ret_costo_proveedor_cobro =
        $ret_costo_proveedor == 1 ? calcularRetencion($datos[11]) : 0;
    $iva_esta_proveedor_cobro =
        $iva_esta_proveedor == 1 ? calcularIVA($datos[12]) : 0;
    $iva_lavado_proveedor_cobro =
        $iva_lavado_proveedor == 1 ? calcularIVA($datos[13]) : 0;
    $iva_flete_proveedor_cobro =
        $iva_flete_proveedor == 1 ? calcularIVA($datos[14]) : 0;
    $ret_flete_proveedor_cobro =
        $ret_flete_proveedor == 1 ? calcularRetencion($datos[14]) : 0;
    $iva_demoras_proveedor_cobro =
        $iva_demoras_proveedor == 1 ? calcularIVA($datos[15]) : 0;
    $iva_maniobras_proveedor_cobro =
        $iva_maniobras_proveedor == 1 ? calcularIVA($datos[16]) : 0;
    actualizarServicioFacturado($datos[0]);
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
        'iva_costo_cliente_cobro' => $iva_costo_cliente_cobro,
        'ret_costo_cliente_cobro' => $ret_costo_cliente_cobro,
        'iva_esta_cliente_cobro ' => $iva_esta_cliente_cobro,
        'iva_lavado_cliente_cobro' => $iva_lavado_cliente_cobro,
        'iva_flete_cliente_cobro' => $iva_flete_cliente_cobro,
        'ret_flete_cliente_cobro' => $ret_flete_cliente_cobro,
        'iva_demoras_cliente_cobro' => $iva_demoras_cliente_cobro,
        'iva_maniobras_cliente_cobro' => $iva_maniobras_cliente_cobro,
        'costo_proveedor ' => $datos[11],
        'estadias_proveedor' => $datos[12],
        'lavado_proveedor' => $datos[13],
        'burreo_proveedor' => $datos[14],
        'demoras_proveedor' => $datos[15],
        'maniobras_proveedor' => $datos[16],
        'otros_proveedor' => $datos[17],
        'comision_proveedor' => $datos[18],
        'nombre_comision_proveedor' => $datos[19],
        'iva_costo_proveedor_cobro' => $iva_costo_proveedor_cobro,
        'ret_costo_proveedor_cobro' => $ret_costo_proveedor_cobro,
        'iva_esta_proveedor_cobro ' => $iva_esta_proveedor_cobro,
        'iva_lavado_proveedor_cobro' => $iva_lavado_proveedor_cobro,
        'iva_flete_proveedor_cobro' => $iva_flete_proveedor_cobro,
        'ret_flete_proveedor_cobro' => $ret_flete_proveedor_cobro,
        'iva_demoras_proveedor_cobro' => $iva_demoras_proveedor_cobro,
        'iva_maniobras_proveedor_cobro' => $iva_maniobras_proveedor_cobro,
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
            'observaciones' => $datos[2],
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    header('Location: ../Admin/cobros.php');
}

function editarCobro($id, $datos, $obligaciones)
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
            'iva_costo_cliente_cobro' => $obligaciones[0],
            'ret_costo_cliente_cobro' => $obligaciones[1],
            'iva_esta_cliente_cobro' => $obligaciones[2],
            'iva_lavado_cliente_cobro ' => $obligaciones[3],
            'iva_flete_cliente_cobro' => $obligaciones[4],
            'ret_flete_cliente_cobro' => $obligaciones[5],
            'iva_demoras_cliente_cobro' => $obligaciones[6],
            'iva_maniobras_cliente_cobro' => $obligaciones[7],
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
            'iva_costo_proveedor_cobro' => $obligaciones[8],
            'ret_costo_proveedor_cobro' => $obligaciones[9],
            'iva_esta_proveedor_cobro' => $obligaciones[10],
            'iva_lavado_proveedor_cobro ' => $obligaciones[11],
            'iva_flete_proveedor_cobro' => $obligaciones[12],
            'ret_flete_proveedor_cobro' => $obligaciones[13],
            'iva_demoras_proveedor_cobro' => $obligaciones[14],
            'iva_maniobras_proveedor_cobro' => $obligaciones[15],
            'no_factura_provee' => $datos[20],
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

function calcularIVA($valor)
{
    $iva = $valor * 0.16;
    return $iva;
}

function calcularRetencion($valor)
{
    $retencion = $valor * 0.04;
    return $retencion;
}

function actualizarServicioFacturado($id)
{
    $GLOBALS['a']->update(
        'servicios',
        [
            'facturado' => 1,
        ],
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
}
