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