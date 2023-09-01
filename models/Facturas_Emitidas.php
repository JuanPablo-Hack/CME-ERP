<?php
include 'DataBase.php';
$a = new database();
function agregarFacturas_Emitidas($datos)
{
    $GLOBALS['a']->insert('facturas_gastos', [
        'fecha_emision' => $datos[0],
        'serie' => $datos[1],
        'folio' => $datos[2],
        'rfc_emisor' => $datos[3],
        'nombre_emisor' => $datos[4],
        'cfdi' => $datos[5],
        'forma_pago' => $datos[6],
        'metodo_pago ' => $datos[7],
        'concepto' => $datos[8],
        'importe' => $datos[9],
        'descuento' => $datos[10],
        'subtotal' => $datos[11],
        'iva ' => $datos[12],
        'retenido_iva' => $datos[13],
        'retenido_isr' => $datos[14],
        'total' => $datos[15],
        'pago' => $datos[16],
        'id_estado' => 1,
        'cuenta' => $datos[17],
    ]);
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function eliminarFacturas_Emitidas($id)
{
    $GLOBALS['a']->delete('facturas_gastos', "id='$id'");
    $result = $GLOBALS['a']->sql;
    echo 1;
}

function editarFacturas_Emitidas($id, $datos)
{
    $GLOBALS['a']->update(
        'facturas_gastos',
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
    header('Location: ../Admin/Facturas_Emitidass.php');
}
