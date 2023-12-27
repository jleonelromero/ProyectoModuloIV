<?php
session_start();
include("Include/conexion.php");

function numRand($tipoID) {
    return rand(1, 9999);
}
function idInstitucion() {
    $prfIns = '615';
    $rand = numRand('idInstitucionEducativa');

    return $prfIns . str_pad($rand, 5, '0', STR_PAD_LEFT);
}
function idPersonaIndividual() {
    $prfPer = '35';
    $sufPer = '82';
    $rand = numRand('idPersona');
    return $prfPer . str_pad($rand, 4, '0', STR_PAD_LEFT) . $sufPer;
}

$tipoUsuario = $_POST['type'];
$nombre = $_POST["txtnombre"];
$apellido = $_POST["txtapellido"];
$director = $_POST["txtdirector"];
$correo = $_POST["txtcorreo"];
$contraseña = $_POST["txtpassword"];
$hashpassword = password_hash($contraseña, PASSWORD_DEFAULT);

if ($tipoUsuario === "institucion") {
    $idUsuario = idInstitucion();
    $sql = "INSERT INTO tbinstitucioneducativa (idInstitucionEducativa, nombre, direcResponsable, correo, contraseña) VALUES ('$idUsuario', '$nombre', '$director', '$correo', '$hashpassword')";
} elseif ($tipoUsuario === "persona") {
    $idUsuario = idPersonaIndividual();
    $sql = "INSERT INTO tbpersonaindividual (idPersona, nombre, apellido, correo, contraseña) VALUES ('$idUsuario', '$nombre', '$apellido', '$correo', '$hashpassword')";
}
echo $tipoUsuario;
mysqli_query($cn, $sql);
header('location: login.php');