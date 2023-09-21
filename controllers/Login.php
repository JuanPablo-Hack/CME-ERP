<?php
session_start();
login($_POST['correo'], sha1($_POST['contra']));
function login($user, $password)
{
    include '../config/UserDBInfo.php';
    $conexion = mysqli_connect(SERVER, USER, PASSWORD, DBNAME);
    $sql = "SELECT * FROM trabajador WHERE correo='$user' and pwd='$password'";
    $resultado = $conexion->query($sql);
    if ($row = mysqli_fetch_assoc($resultado)) {
        $_SESSION['user'] = $row['id'];
        if ($row['rol'] == 1) {
            header('HTTP/1.1 302 Moved Temporarily');
            header('Location: ../Admin/');
        }
        if ($row['rol'] == 2) {
            $_SESSION['user'] = $row['id'];
            header('HTTP/1.1 302 Moved Temporarily');
            header('Location: ../Comercial/');
        }
        if ($row['rol'] == 3) {
            $_SESSION['user'] = $row['id'];
            header('HTTP/1.1 302 Moved Temporarily');
            header('Location: ../Operador/');
        }
        if ($row['rol'] == 4) {
            $_SESSION['user'] = $row['id'];
            header('HTTP/1.1 302 Moved Temporarily');
            header('Location: ../Contabilidad/');
        }
    } else {
        header('Location: ../Error/Credenciales.php');
    }
}
