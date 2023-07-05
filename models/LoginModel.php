<?php
function login($conexion, $user, $password)
{
    session_start();
    $sql = "SELECT * FROM trabajador WHERE correo='$user' and pwd='$password'";
    $resultado = $conexion->query($sql);
    if ($row = mysqli_fetch_assoc($resultado)) {
        if ($row['rol'] == 1) {
            $_SESSION['id'] = $row['id'];
            header("HTTP/1.1 302 Moved Temporarily");
            header("Location: ../Admin/");
        }
        if ($row['rol'] == 2) {
            $_SESSION['id'] = $row['id'];
            header("HTTP/1.1 302 Moved Temporarily");
            header("Location: ../Comercial/");
        }
        if ($row['rol'] == 3) {
            $_SESSION['id'] = $row['id'];
            header("HTTP/1.1 302 Moved Temporarily");
            header("Location: ../Operativo/");
        }
    } else {
        header("Location: ../error_login.html");
    }
}
