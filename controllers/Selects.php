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

function calcularCobrosCliente(
    $costo_cliente,
    $estadias_cliente,
    $lavado_cliente,
    $burreo_cliente,
    $demoras_cliente,
    $manioabras_cliente,
    $otros_clientes
) {
    $totalFleteCliente = $costo_cliente * 1.16 - $costo_cliente * 0.04;
    return $totalFleteCliente;
}
function calcularCobrosProveedor(
    $id_proveedor,
    $costo_Proveedor,
    $estadias_proveedor,
    $lavado_proveedor,
    $burreo_proveedor,
    $demoras_proveedor,
    $manioabras_proveedor,
    $otros_proveedor
) {
    if ($id_proveedor == 0) {
        $totalFleteProveedor = $costo_Proveedor;
        return $totalFleteProveedor;
    } else {
        $totalFleteProveedor =
            $costo_Proveedor * 1.16 - $costo_Proveedor * 0.04;
        return $totalFleteProveedor;
    }
}
