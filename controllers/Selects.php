<?php
include "../models/DataBase.php";
function  ObtenerClientes()
{
    $a = new database();
    $a->select("clientes", "*");
    $result = $a->sql;
    return $result;
}
function  ObtenerCliente($id)
{
}
