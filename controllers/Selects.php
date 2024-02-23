<?php
include '../models/DataBase.php';
$GLOBALS['a'] = new database();
function ObtenerClientes()
{
    $GLOBALS['a']->select('clientes', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerSubClientes()
{
    $GLOBALS['a']->select('subcliente', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerProveedores()
{
    $GLOBALS['a']->select('proveedores', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerOperadores()
{
    $GLOBALS['a']->select('empresa_transportista', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerUsuarios()
{
    $GLOBALS['a']->select('trabajador', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerUnidades()
{
    $GLOBALS['a']->select('unidades', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerTipoServicios()
{
    $GLOBALS['a']->select('tipos_servicios', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerTiposTransporte()
{
    $GLOBALS['a']->select('tipos_transporte', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerTiposContenedores()
{
    $GLOBALS['a']->select('tipo_contenedor', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerCombustibles()
{
    $GLOBALS['a']->select('registros_combustible', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerMantenimientos()
{
    $GLOBALS['a']->select('registros_mantenimiento', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerInvetario()
{
    $GLOBALS['a']->select('productos', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerCotizaciones()
{
    $GLOBALS['a']->select('cotizaciones', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerCobros()
{
    $GLOBALS['a']->select('cobros', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerFacturasPagar()
{
    $GLOBALS['a']->select('facturas_gastos', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerCliente($id)
{
    $GLOBALS['a']->select('clientes', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['razon_social'];
}

function obtenerSubCliente($id)
{
    $GLOBALS['a']->select('subcliente', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerOperador($id)
{
    $GLOBALS['a']->select('empresa_transportista', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function ObtenerUnidad($id)
{
    $GLOBALS['a']->select('unidades', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['placa'];
}

function obtenerEstado($id)
{
    $GLOBALS['a']->select('estados', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerEstadoCobros($id)
{
    $GLOBALS['a']->select('estados_cobros', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerProveedor($id)
{
    $GLOBALS['a']->select('proveedores', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['razon_social'];
}

function obtenerCobrosClientes()
{
    $GLOBALS['a']->select('cobros_clientes', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerCobrosProveedores()
{
    $GLOBALS['a']->select('cobros_proveedores', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerServicios()
{
    $GLOBALS['a']->select('servicios', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerServiciosNoFacturados()
{
    $GLOBALS['a']->select('servicios', '*', 'facturado=0');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerServiciosPropio($id)
{
    $GLOBALS['a']->select('servicios', '*', "proveedor='$id'");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerViajes()
{
    $GLOBALS['a']->select('viajes', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function ObtenerReferenciaServicios($id)
{
    $GLOBALS['a']->select('servicios', '*', "id='$id'");
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos;
}

function obtenerFacturasEmitidas()
{
    $GLOBALS['a']->select('facturas_gastos', '*');
    $result = $GLOBALS['a']->sql;
    return $result;
}

function calcularCobrosCliente($id)
{
    $GLOBALS['a']->select(
        'cobros',
        'costo_cliente + estadias_cliente + lavado_cliente + burreo_cliente + demoras_cliente + maniobras_cliente + otros_cliente + iva_costo_cliente_cobro + ret_costo_cliente_cobro + iva_esta_cliente_cobro + iva_lavado_cliente_cobro + iva_flete_cliente_cobro + ret_flete_cliente_cobro + iva_demoras_cliente_cobro + iva_maniobras_cliente_cobro as total ',
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['total'];
}
function calcularCobrosProveedor($id)
{
    $GLOBALS['a']->select(
        'cobros',
        'costo_proveedor + estadias_proveedor + lavado_proveedor + burreo_proveedor + demoras_proveedor + maniobras_proveedor + otros_proveedor + iva_costo_proveedor_cobro + ret_costo_proveedor_cobro + iva_esta_proveedor_cobro + iva_lavado_proveedor_cobro + iva_flete_proveedor_cobro + ret_flete_proveedor_cobro + iva_demoras_proveedor_cobro + iva_maniobras_proveedor_cobro as total ',
        "id='$id'"
    );
    $result = $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['total'];
}
