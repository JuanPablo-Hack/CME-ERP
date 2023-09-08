<?php
include "../models/DataBase.php";
$GLOBALS['a'] = new database();
function  ObtenerClientes()
{

    $GLOBALS['a']->select("clientes", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerProveedores()
{
    $GLOBALS['a']->select("proveedores", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerUsuarios()
{
    $GLOBALS['a']->select("trabajador", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerUnidades()
{
    $GLOBALS['a']->select("unidades", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerTipoServicios()
{
    $GLOBALS['a']->select("tipos_servicios", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerTiposTransporte()
{
    $GLOBALS['a']->select("tipos_transporte", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}



function  ObtenerTiposContenedores()
{
    $GLOBALS['a']->select("tipo_contenedor", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerCombustibles()
{
    $GLOBALS['a']->select("registros_combustible", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerMantenimientos()
{
    $GLOBALS['a']->select("registros_mantenimiento", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerInvetario()
{
    $GLOBALS['a']->select("productos", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function  ObtenerCotizaciones()
{
    $GLOBALS['a']->select("cotizaciones", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerCliente($id)
{
    $GLOBALS['a']->select("clientes", "*", "id='$id'");
    $result =  $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['razon_social'];
}

function obtenerOperador($id)
{
    $GLOBALS['a']->select("trabajador", "*", "id='$id'");
    $result =  $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function ObtenerUnidad($id)
{
    $GLOBALS['a']->select("unidades", "*", "id='$id'");
    $result =  $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['modelo'];
}

function obtenerEstado($id)
{
    $GLOBALS['a']->select("estados", "*", "id='$id'");
    $result =  $GLOBALS['a']->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerCobrosClientes()
{
    $GLOBALS['a']->select("cobros_clientes", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerCobrosProveedores()
{
    $GLOBALS['a']->select("cobros_proveedores", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerServicios()
{
    $GLOBALS['a']->select("servicios", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerViajes()
{
    $GLOBALS['a']->select("viajes", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}

function obtenerFacturasEmitidas()
{
    $GLOBALS['a']->select("facturas_gastos", "*");
    $result = $GLOBALS['a']->sql;
    return $result;
}
