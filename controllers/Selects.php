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