<?php
session_start();
include("include/conexion.php");
$usu = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$sql = "SELECT idUsuario, correoLogin, contraseña FROM (SELECT idInstitucionEducativa AS idUsuario, correo AS correoLogin, contraseña FROM tbinstitucioneducativa UNION ALL SELECT idpersona AS idUsuario, correo AS correoLogin, contraseña FROM tbpersonaindividual UNION ALL SELECT idAdmin AS idUsuario, NULL AS correoLogin, contraseña FROM tbadministrador) AS usuarios WHERE correoLogin = '$usu' OR idUsuario = '$usu'";
$fila = mysqli_query($cn, $sql);
$r = mysqli_fetch_assoc($fila);
if ($r) {
    $contraseña_hash = $r["contraseña"];
    if (password_verify($pass, $contraseña_hash)) {
        $_SESSION["usuario"] = $r["idUsuario"];
        $_SESSION["auth"] = 1;
        header("Location: principal.php");
        exit();
    }
}
header("Location: login.php");
