<?php
include 'DataBase.php';
$a = new database();
function agregarCobro($datos, $cliente_cobros, $proveedor_cobros)
{
    actualizarServicioFacturado($datos[0]);
    $datos_cobros_clientes = implode(',', $cliente_cobros);
    $datos_proveedores = implode(',', $proveedor_cobros);
    $GLOBALS['a']->insert('cobros', [
        'ref_serv' => $datos[0],
        'fact_cliente' => $datos[1],
        'fact_proveedor' => $datos[2],
        'conceptos_cliente' => $datos[3],
        'conceptos_proveedor ' => $datos[4],
        'arreglo_clientes' => $datos_cobros_clientes,
        'arreglo_proveedores' => $datos_proveedores,
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
