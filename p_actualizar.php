<?php
include("Include/conexion.php");
$cod = $_SESSION["usuario"];
$sqlInstitucion = "SELECT * FROM tbinstitucioneducativa WHERE idInstitucionEducativa = '$cod'";
$fInst = mysqli_query($cn, $sqlInstitucion);
$rInst = mysqli_fetch_assoc($fInst);
$sqlPersona = "SELECT * FROM tbpersonaindividual WHERE idPersona = '$cod'";
$fPers = mysqli_query($cn, $sqlPersona);
$rPers = mysqli_fetch_assoc($fPers);
if ($rInst) {
    $codigo = $_POST["txtcodigo"];
    $nombre = $_POST["txtnombre"];
    $director = $_POST["txtdirector"];
    $alumnos = $_POST["txtalumnos"];
    $docentes = $_POST["txtdocentes"];
    $administrativos = $_POST["txtadministrativos"];
    $distrito = $_POST["ldistritos"];
    $sql = "UPDATE tbinstitucioneducativa SET codInstitucion = '$codigo', nombre = '$nombre', direcResponsable = '$director', numAlumnos = '$alumnos', numDocentes = '$docentes', numAdministrativos = '$administrativos', idDistrito = '$distrito', estado = 1 WHERE idInstitucionEducativa = '$cod'";
} elseif ($rPers) {
    $nombres = $_POST["txtnombres"];
    $apellidos = $_POST["txtapellidos"];
    $edad = $_POST["txtedad"];
    $dni = $_POST["txtdni"];
    $distrito = $_POST["ldistritos"];
    $sql = "UPDATE tbpersonaindividual SET nombre = '$nombres', apellido = '$apellidos', edad = '$edad', dni = '$dni', idDistrito = '$distrito', estado = 1 WHERE idPersona = '$cod'";
}
mysqli_query($cn, $sql);
header('location: perfil.php');
