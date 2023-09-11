<?php
include 'DataBase.php';
$a = new database();
function agregarFacturasPagar($datos)
{
    $GLOBALS['a']->insert('facturas_emitidas', [
        'fecha_emision' => $datos[0],
        'folio' => $datos[1],
        'uuid' => $datos[2],
        'rfc_receptor' => $datos[3],
        'nombre_receptor ' => $datos[4],
        'usocfdi' => $datos[5],
        'moneda' => $datos[6],
        'tipo_cambio' => $datos[7],
        'forma_pago' => $datos[8],
        'metodo_pago' => $datos[9],
        'conceptos' => $datos[10],
        'subtotal' => $datos[11],
        'descuento ' => $datos[12],
        'iva' => $datos[13],
        'retenido_iva' => $datos[14],
        'retenido_isr' => $datos[15],
        'total' => $datos[16],
        'deposito' => $datos[17],
        'fecha' => $datos[18],
        'concepto' => $datos[19],
        'banco ' => $datos[20],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarFacturasPagar($id)
{
    $GLOBALS['a']->delete('facturas_emitidas', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarFacturasPagar($id, $datos)
{
    $GLOBALS['a']->update(
        'facturas_emitidas',
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
    header('Location: ../Admin/facturas_emitidass.php');
}
