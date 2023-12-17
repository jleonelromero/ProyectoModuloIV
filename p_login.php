<?php
session_start();
include("include/conexion.php");
$usu = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$sql = "SELECT idUsuario, correoLogin, tipoUsuario FROM (SELECT idInstitucionEducativa AS idUsuario, correo AS correoLogin, contraseña, '1' as tipoUsuario FROM tbinstitucioneducativa UNION ALL SELECT idpersona AS idUsuario, correo AS correoLogin, contraseña, '1' as tipoUsuario FROM tbpersonaindividual UNION ALL 
SELECT idAdmin AS idUsuario, NULL AS correoLogin, contraseña, '2' AS tipoUsuario FROM tbadministrador) AS usuarios WHERE (correoLogin = '$usu' OR idUsuario = '$usu') AND contraseña = '$pass'";
$fila = mysqli_query($cn, $sql);
$r = mysqli_fetch_assoc($fila);
$valor = $r["idUsuario"];
if ($valor == null) {
    header("Location: login.php");
} else {
    $_SESSION["usuario"] = $valor;
    $_SESSION["auth"] = $r["tipoUsuario"];
    if ($r["tipoUsuario"] == '2') {
        header("Location: principal_admin.php");
    } else {
        header("Location: principal.php");
    }
}
